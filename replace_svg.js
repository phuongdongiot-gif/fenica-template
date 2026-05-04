const fs = require('fs');

try {
    const animationContent = fs.readFileSync('animation.html', 'utf8');
    const indexContent = fs.readFileSync('index.html', 'utf8');

    // Extract SVG
    const svgStart = animationContent.indexOf('<svg');
    const svgEnd = animationContent.indexOf('</svg>') + 6;
    let svgContent = animationContent.slice(svgStart, svgEnd);

    // Add classes to SVG so it fits beautifully in the space like the image did
    // The original image had: class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
    // We can inject these classes into the <svg> tag.
    svgContent = svgContent.replace('<svg ', '<svg class="w-full h-full object-contain drop-shadow-2xl" ');

    // Extract Script
    const scriptStart = animationContent.lastIndexOf('<script>');
    const scriptEnd = animationContent.lastIndexOf('</script>') + 9;
    const scriptContent = animationContent.slice(scriptStart, scriptEnd);

    // Replace img in index.html
    const imgRegex = /<img[^>]*src="assets\/images\/map\.png"[^>]*alt="Bản đồ Vị trí"[^>]*>/i;
    
    if (!imgRegex.test(indexContent)) {
        console.error('Could not find the target <img> tag in index.html');
        process.exit(1);
    }

    let newIndexContent = indexContent.replace(imgRegex, svgContent);

    // Add the custom GSAP script before </body>
    if (!newIndexContent.includes('TẠO HIỆU ỨNG VẼ CHO CÁC ĐƯỜNG LINK (PATHS)')) {
        newIndexContent = newIndexContent.replace('</body>', scriptContent + '\n</body>');
    }

    fs.writeFileSync('index.html', newIndexContent, 'utf8');
    console.log('Successfully updated index.html with SVG and animation script.');
} catch (error) {
    console.error('Error:', error);
}
