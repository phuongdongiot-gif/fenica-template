UPDATE wp_posts 
SET post_content = REPLACE(post_content, 'http://localhost', 'https://domain.com');

UPDATE wp_posts 
SET post_content = REPLACE(post_content, 'http://localhost:8000', 'https://yourdomain.com');