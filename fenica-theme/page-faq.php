<?php
/**
 * Template Name: FAQ Page
 */

get_header(); ?>

<main id="primary" class="site-main">
    <style>
        :root {
            --primary-color: #d4ae6f;
            /* Gold */
            --secondary-color: transparent;
            --text-color: #e5e7eb;
            --border-color: rgba(212, 174, 111, 0.2);
            --accent-color: rgba(212, 174, 111, 0.05);
        }

        body {
            /* Inherit from global style.css */
        }

        .container {
            max-width: 1000px;
            margin: 120px auto 60px auto;
            padding: 40px;
            border-radius: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            border: 1px solid var(--border-color);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 10;
        }

        h1 {
            text-align: center;
            color: var(--primary-color);
            margin-bottom: 10px;
            text-transform: uppercase;
            font-size: 2.5rem;
            font-weight: 700;
        }

        .project-status {
            text-align: center;
            font-size: 0.9em;
            color: rgba(255, 255, 255, 0.5);
            margin-bottom: 40px;
            font-style: italic;
        }

        /* Search Box Styles */
        .search-container {
            position: sticky;
            top: 90px;
            z-index: 100;
            margin-bottom: 40px;
        }

        #searchInput {
            width: 100%;
            padding: 16px 24px;
            font-size: 16px;
            border: 1px solid var(--border-color);
            background: rgba(0, 0, 0, 0.4);
            color: #fff;
            border-radius: 30px;
            box-sizing: border-box;
            outline: none;
            transition: all 0.3s;
            backdrop-filter: blur(5px);
        }

        #searchInput::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        #searchInput:focus {
            box-shadow: 0 0 15px rgba(212, 174, 111, 0.2);
            border-color: var(--primary-color);
        }

        /* Tabs Styles */
        .tabs {
            display: flex;
            flex-wrap: wrap;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 30px;
            gap: 5px;
            justify-content: center;
        }

        .tab-link {
            padding: 12px 20px;
            cursor: pointer;
            background: none;
            border: none;
            outline: none;
            font-size: 14px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.5);
            transition: all 0.3s;
            border-bottom: 2px solid transparent;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .tab-link:hover {
            color: var(--primary-color);
            background-color: var(--accent-color);
            border-radius: 8px 8px 0 0;
        }

        .tab-link.current {
            color: var(--primary-color);
            border-bottom: 2px solid var(--primary-color);
        }

        .tab-content {
            display: none;
        }

        .tab-content.current {
            display: block;
            animation: fadeIn 0.5s;
        }

        /* Q&A Items Styles */
        .qa-section {
            margin-bottom: 25px;
        }

        .section-title {
            background-color: var(--accent-color);
            color: var(--primary-color);
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 1.2em;
            font-weight: bold;
            border: 1px solid var(--border-color);
        }

        .qa-item {
            background-color: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            margin-bottom: 15px;
            overflow: hidden;
            transition: all 0.3s;
        }

        .qa-item:hover {
            border-color: rgba(212, 174, 111, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .question {
            font-weight: 500;
            padding: 18px 20px;
            background-color: transparent;
            border-bottom: 1px solid transparent;
            cursor: pointer;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            transition: color 0.3s;
            font-size: 1.05rem;
        }

        .question:hover {
            color: var(--primary-color);
        }

        .question:after {
            content: '+';
            font-size: 24px;
            font-weight: 300;
            margin-left: 15px;
            color: var(--primary-color);
            transition: transform 0.3s;
        }

        .qa-item.active {
            border-color: var(--border-color);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .qa-item.active .question {
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            color: var(--primary-color);
        }

        .qa-item.active .question:after {
            content: '−';
            transform: rotate(180deg);
        }

        .answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out, padding 0.4s ease-out;
            background-color: transparent;
            color: #d1d5db;
            line-height: 1.7;
            font-weight: 300;
        }

        .qa-item.active .answer {
            padding: 20px;
            max-height: 2000px;
        }

        .answer ul {
            margin: 0;
            padding-left: 20px;
            list-style-type: disc;
        }

        .answer li {
            margin-bottom: 10px;
        }

        .answer table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            font-size: 0.9em;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow-x: auto;
            display: block;
            white-space: nowrap;
        }

        .answer table,
        .answer th,
        .answer td {
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .answer th,
        .answer td {
            padding: 12px;
            text-align: left;
        }

        .answer th {
            background-color: var(--accent-color);
            color: var(--primary-color);
            font-weight: 600;
        }

        .no-results {
            display: none;
            text-align: center;
            padding: 30px;
            color: rgba(255, 255, 255, 0.5);
            font-style: italic;
        }

        /* Highlight search term */
        .highlight {
            background-color: rgba(212, 174, 111, 0.3);
            color: #fff;
            font-weight: bold;
            padding: 0 4px;
            border-radius: 3px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                margin: 100px 15px 40px 15px;
                padding: 20px 15px;
            }

            .tab-link {
                padding: 10px 15px;
                font-size: 13px;
                flex: 1 1 auto;
                text-align: center;
            }

            h1 {
                font-size: 1.8em;
            }
        }
    </style>
    <div class="container">
        <h1
            class="py-4 text-2xl lg:text-4xl font-bold playfair uppercase tracking-wide animate-gradient-text drop-shadow-[0_2px_15px_rgba(212,174,111,0.4)]">
            Dự án Fenica - FAQ</h1>
        <p class="project-status">* Thông tin mang tính chất tham khảo tại thời điểm hiện tại. Thời gian hoàn thành thực
            tế có thể dao động từ 03-06 tháng.</p>

        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Nhập từ khóa cần tìm (vd: quy mô, vị trí, giá, PCCC)...">
        </div>

        <!-- Tabs Thanh điều hướng -->
        <ul class="tabs">
            <li class="tab-link current" data-tab="tab-A">A. Tổng quan</li>
            <li class="tab-link" data-tab="tab-B">B. Chủ đầu tư & Phát triển</li>
            <li class="tab-link" data-tab="tab-C">C. Thiết kế</li>
            <li class="tab-link" data-tab="tab-D">D. Tiện ích & Dịch vụ</li>
            <li class="tab-link" data-tab="tab-E">E. Điều kiện bàn giao</li>
            <li class="tab-link" data-tab="tab-F">F. Thủ tục</li>
        </ul>

        <div id="noResults" class="no-results">Không tìm thấy câu hỏi nào phù hợp với từ khóa của bạn.</div>

        <!-- NỘI DUNG CÁC TAB -->

        <!-- TAB A -->
        <div id="tab-A" class="tab-content current">
            <div class="qa-section">
                <div class="qa-item">
                    <div class="question">1. Quy mô của dự án Dự án Fenica?</div>
                    <div class="answer">
                        <ul>
                            <li>Diện tích đất: 5.537m2</li>
                            <li>Quy mô: 2 block 22 tầng (2 tầng khối đế)</li>
                            <li>Mật độ xây dựng:
                                <ul>
                                    <li>Khối đế: 52,32%</li>
                                    <li>Khối tháp: 39,20%</li>
                                </ul>
                            </li>
                            <li>Diện tích sàn: 39.202m2</li>
                            <li>Số lượng sản phẩm: 579 căn hộ</li>
                        </ul>
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">2. Vị trí của Dự án Fenica ở đâu và làm thế nào đi đến Dự án Fenica?</div>
                    <div class="answer">
                        <p>Dự án Fenica tọa lạc tại Đường Trần Quang Diệu, P. Tân Đông Hiệp, Thành phố Hồ Chí Minh.</p>
                        <p>Có thể kết nối qua trục cao tốc Tân Vạn – Mỹ Phước chỉ 1 phút hoặc QL13, QL1K khoảng 10 phút
                            để đi đến dự án.</p>
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">3. Dự án Fenica cách trung tâm TPHCM và các tiện ích xung quanh bao xa?</div>
                    <div class="answer">
                        <p>Dự án được hưởng lợi từ các tiện ích trong phạm vi 4-5km như TTTM, trường học, gần KCN VSIP
                            I, KCN Việt Hương 1, AEON MALL.</p>
                        <p>Khoảng cách đến các trung tâm:</p>
                        <ul>
                            <li>5 phút đến Ga An Phú (Tuyến Metro Suối Tiên - Bình Dương)</li>
                            <li>20 phút tới Thủ Đức</li>
                            <li>35 phút đến sân bây Tân Sơn Nhất</li>
                            <li>40 phút đến phường Sài Gòn</li>
                            <li>60 phút đến sân bay Long Thành</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB B -->
        <div id="tab-B" class="tab-content">
            <div class="qa-section">
                <div class="qa-item">
                    <div class="question">1. Chủ Đầu Tư là ai?</div>
                    <div class="answer">Dự án Dự án Fenica được phát triển bởi liên doanh gồm CT TNHH Đầu tư dự án
                        Phượng Hoàng, các nhà đồng phát triển DLR (Dalat Real) và NK Properties.</div>
                </div>
                <div class="qa-item">
                    <div class="question">2. Giới thiệu về CT TNHH Đầu tư dự án Phượng Hoàng?</div>
                    <div class="answer">Dự án Fenica là dự án đầu tay của CĐT Phượng Hoàng. Tuy nhiên với sứ mệnh kiến
                        tạo những không gian sống đẳng cấp và bền vững, CĐT Phượng Hoàng đang tập trung phát triển dự án
                        chất lượng, pháp lý minh bạch, góp phần quan trọng vào việc thay đổi diện mạo đô thị và nâng tầm
                        chuẩn sống cho cộng đồng cư dân tại khu vực Đông Bắc TPHCM.</div>
                </div>
                <div class="qa-item">
                    <div class="question">3. Giới thiệu về DLR (Dalat Real)?</div>
                    <div class="answer">Công ty CP Địa ốc Đà Lạt (DLR) được thành lập năm 1992 từ việc cổ phần hóa Doanh
                        nghiệp Nhà nước Công ty Kinh Doanh và Phát Triển Nhà Lâm Đồng. Công ty bề dày kinh nghiệm hơn 30
                        năm chuyên tư vấn thiết kế và thi công xây dựng, phát triển dự án các công trình bất động sản
                        chung cư cao tầng và dự án thấp tầng, trụ sở làm việc, trường học...</div>
                </div>
                <div class="qa-item">
                    <div class="question">4. Giới thiệu về NK Properties?</div>
                    <div class="answer">
                        <p>Đơn vị phát triển các dự án bất động sản chất lượng cao, mang bản sắc riêng. Giá trị cốt lõi
                            là:</p>
                        <ul>
                            <li>Minh bạch trong hoạt động</li>
                            <li>Chạm điểm hài lòng với khách hàng</li>
                            <li>Quy hoạch và phát triển phù hợp hài hòa giữa con người, môi trường và cộng đồng.</li>
                        </ul>
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">5. Ai là nhà tư vấn cho Dự án Fenica?</div>
                    <div class="answer">NAGECCO là công ty tư vấn xây dựng hạng I với gần 50 năm kinh nghiệm, được phép
                        hoạt động trên các dự án nhóm A.</div>
                </div>
                <div class="qa-item">
                    <div class="question">6. Nhà thầu thi công phần móng là đơn vị nào?</div>
                    <div class="answer">CĐT đang lựa chọn các đơn vị Nhà thâu uy tín phù hợp, sẽ thông báo ngay khi có
                        kết quả.</div>
                </div>
                <div class="qa-item">
                    <div class="question">7. Nhà thầu thi công chính của dự án là ai?</div>
                    <div class="answer">CĐT đang lựa chọn các đơn vị Nhà thầu uy tín phù hợp, sẽ thông báo ngay khi có
                        kết quả.</div>
                </div>
                <div class="qa-item">
                    <div class="question">8. Kế hoạch thi công dự kiến của dự án?</div>
                    <div class="answer">
                        <ul>
                            <li>Hoàn thành xong móng: 04/2026</li>
                            <li>Đủ điều kiện ký HĐMB: 07/2026</li>
                            <li>Hoàn thành xong phần thân: 12/2026</li>
                            <li>Hoàn thành xong phần hoàn thiện: 10/2027</li>
                            <li>Bàn giao đến khách hàng: Q4/2027</li>
                        </ul>
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">9. Đơn vị quản lý tòa nhà sẽ là công ty nào?</div>
                    <div class="answer">CĐT đang lựa chọn các đơn vị QLVH phù hợp, sẽ thông báo ngay khi có kết quả.
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB C -->
        <div id="tab-C" class="tab-content">
            <div class="qa-section">
                <div class="qa-item">
                    <div class="question">1. Diện tích của các căn hộ điển hình?</div>
                    <div class="answer">
                        <table>
                            <thead>
                                <tr>
                                    <th>Số phòng ngủ</th>
                                    <th>Tim tường (m2)</th>
                                    <th>Thông Thủy (m2)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 phòng ngủ</td>
                                    <td>43.08</td>
                                    <td>39.34</td>
                                </tr>
                                <tr>
                                    <td>1 phòng ngủ +1</td>
                                    <td>49.46</td>
                                    <td>45.29</td>
                                </tr>
                                <tr>
                                    <td>1 phòng ngủ +1 (căn góc)</td>
                                    <td>50.48</td>
                                    <td>45.71</td>
                                </tr>
                                <tr>
                                    <td>2 phòng ngủ</td>
                                    <td>66.31</td>
                                    <td>60.05</td>
                                </tr>
                                <tr>
                                    <td>3 phòng ngủ</td>
                                    <td>99.01</td>
                                    <td>93.08</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">2. Có mấy căn hộ ở mỗi tầng điển hình?</div>
                    <div class="answer">Có 15 căn hộ/block ở mỗi tầng điển hình.</div>
                </div>
                <div class="qa-item">
                    <div class="question">3. Có căn hộ penthouse tại Dự án Fenica không?</div>
                    <div class="answer">Không có.</div>
                </div>
                <div class="qa-item">
                    <div class="question">4. Mỗi tháp có mấy thang máy?</div>
                    <div class="answer">
                        <p>Có 3 thang khách cho mỗi tòa nhà và 1 thang hàng rộng hơn (dùng vận chuyển hàng khi có đăng
                            ký).</p>
                        <p>Kích thước thang (DxRxC):</p>
                        <ul>
                            <li>Thang khách: 1,3m x 1,7m x 2,3m</li>
                            <li>Thang PCCC + vận chuyển: 1,3m x 2,3m x 2,3m</li>
                        </ul>
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">5. Khoảng cách giữa các tháp của dự án là bao nhiêu?</div>
                    <div class="answer">≥ 15m</div>
                </div>
                <div class="qa-item">
                    <div class="question">6. Hành lang chung mỗi tầng rộng bao nhiêu?</div>
                    <div class="answer">1,6m</div>
                </div>
                <div class="qa-item">
                    <div class="question">7. Tòa nhà có được thiết kế chịu động đất không? Chịu lực đến mức nào?</div>
                    <div class="answer">Có, thiết kế theo chuẩn DCL.</div>
                </div>
                <div class="qa-item">
                    <div class="question">8. Hệ thống móng của tòa nhà là gì?</div>
                    <div class="answer">Móng cọc.</div>
                </div>
                <div class="qa-item">
                    <div class="question">9. Thang máy có tốc độ và tải trọng bao nhiêu?</div>
                    <div class="answer">
                        <ul>
                            <li>Thang khách: 1050kg, 1,75m/s</li>
                            <li>Thang PCCC + vận chuyển hàng: 1350kg, 1,75m/s</li>
                        </ul>
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">10. Có thông gió tự nhiên cho hành lang mỗi tầng không?</div>
                    <div class="answer">Có.</div>
                </div>
                <div class="qa-item">
                    <div class="question">11. Khách Trung Tâm Thương Mại lên tầng trệt như thế nào, có dùng chung thang
                        với cư dân không?</div>
                    <div class="answer">Dùng thang cuốn cho giao thông đi từ hầm - tầng trệt.</div>
                </div>
                <div class="qa-item">
                    <div class="question">12. Dự án có bố trí hệ thống an ninh thẻ từ cho từng tầng hay không?</div>
                    <div class="answer">Có. Mỗi tầng đều được kiểm soát bằng thẻ từ an ninh.</div>
                </div>
                <div class="qa-item">
                    <div class="question">13. Hệ thống an ninh và Thông gió sảnh/hành lang được bố trí như thế nào?
                    </div>
                    <div class="answer">
                        <ul>
                            <li>An ninh: Hệ thống quản lý bằng camera + Kiểm soát an ninh từ ĐV vận hành.</li>
                            <li>Thông gió: Thông gió tự nhiên.</li>
                        </ul>
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">15. Hệ thống xử lý nước thải đặt ở đâu?</div>
                    <div class="answer">Nước thải được thu gom vào bể tự hoại đặt tại tầng hầm 1 và được bơm vào hệ
                        thống thoát nước thải khu vực để đưa về trạm XLNT tập trung của khu vực.</div>
                </div>
                <div class="qa-item">
                    <div class="question">16. Có bồn chứa nước dự phòng không?</div>
                    <div class="answer">Có.</div>
                </div>
                <div class="qa-item">
                    <div class="question">17. Hệ thống quản lý rác thải được bố trí và di chuyển như thế nào?</div>
                    <div class="answer">Mỗi tầng có phòng thu rác. Rác được thu gom và vận chuyển xuống phòng tập kết
                        tại tầng hầm 1 bằng thang vận chuyển theo khung giờ quy định.</div>
                </div>
                <div class="qa-item">
                    <div class="question">18. Tòa nhà có hệ thống báo cháy không? Thiết kế ra sao?</div>
                    <div class="answer">Có hệ thống báo cháy, và được kiểm soát tại phòng trực PCCC.</div>
                </div>
                <div class="qa-item">
                    <div class="question">19. Khu vực công cộng có đầy đủ thiết bị PCCC không?</div>
                    <div class="answer">Có bình chữa cháy, họng nước, vòi phun sprinkler và hệ thống báo cháy được thiết
                        kế đầy đủ theo quy định.</div>
                </div>
                <div class="qa-item">
                    <div class="question">20. Có hệ thống bơm nước phục vụ chữa cháy và họng nước cứu hỏa không?</div>
                    <div class="answer">Có đầy đủ theo quy định.</div>
                </div>
                <div class="qa-item">
                    <div class="question">22. Khu vực thoát hiểm có cửa chống cháy không? Mỗi tòa nhà có bao nhiêu thang
                        thoát hiểm?</div>
                    <div class="answer">Mỗi tháp có 2 thang thoát hiểm được thiết kế cửa chống cháy.</div>
                </div>
                <div class="qa-item">
                    <div class="question">23. Đường nội bộ bên trong khu dân cư rộng bao nhiêu?</div>
                    <div class="answer">3,5m – 4m.</div>
                </div>
                <div class="qa-item">
                    <div class="question">24 & 25. Độ cao trần của Tầng Hầm và Khối Đế?</div>
                    <div class="answer">
                        <ul>
                            <li>Hầm 1: 4m / Hầm 2: 3,3m</li>
                            <li>Tầng 1: 5m / Tầng 2: 5m</li>
                        </ul>
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">26. Giải quyết thế nào nếu không đủ ô đậu xe cho cư dân?</div>
                    <div class="answer">Theo tính toán dựa trên QCVN 01:2021/BXD, tổng diện tích để xe thiết kế tại 2
                        tầng hầm là khoảng 6.061,35m2, đủ đáp ứng nhu cầu tối thiểu (5.973,90m2) cho căn hộ và dịch vụ
                        thương mại.</div>
                </div>
                <div class="qa-item">
                    <div class="question">27. Thông số kĩ thuật phần kính cửa sổ, ban công (cách âm, cách nhiệt...)?
                    </div>
                    <div class="answer">Kính cửa đi lùa ra logia, cửa sổ, cửa phòng giặt đều là loại kính dán an toàn
                        dày 8.38 mm. Tất các loại cửa không có tính năng cách âm, cách nhiệt chuyên dụng.</div>
                </div>
            </div>
        </div>

        <!-- TAB D -->
        <div id="tab-D" class="tab-content">
            <div class="qa-section">
                <div class="qa-item">
                    <div class="question">1. Quầy lễ tân ở đâu?</div>
                    <div class="answer">Quầy lễ tân ở Tầng Trệt của mỗi Tòa Nhà.</div>
                </div>
                <div class="qa-item">
                    <div class="question">2 & 3. Phí quản lý, phí đậu xe ô tô và xe máy dự kiến bao nhiêu?</div>
                    <div class="answer">CĐT đang lựa chọn đơn vị QLVH. Đơn vị QLVH sẽ thông báo chi phí cụ thể đến cư
                        dân khi bắt đầu bàn giao nhà.</div>
                </div>
                <div class="qa-item">
                    <div class="question">4. Các tiện ích của Dự án Fenica có được miễn phí không?</div>
                    <div class="answer">Phí sử dụng các tiện ích như Khu phòng Gym, Hồ bơi,... đã bao gồm trong phí quản
                        lý, ngoại trừ “phòng gym trong khu vực thương mại”.</div>
                </div>
                <div class="qa-item">
                    <div class="question">5. Dự án Fenica bao gồm những tiện ích gì?</div>
                    <div class="answer">
                        <strong>Tầng 1:</strong> Khu thương mại, Khu nhà trẻ, Khu công viên cảnh quan, Khu BBQ ngoài
                        trời, Tụ hương đài.<br>
                        <strong>Tầng 2:</strong> Khu thương mại, Khu sinh hoạt cộng đồng, Khu Kidzone & Livestream room,
                        Hồ bơi cư dân, Khu phòng Gym, Khu nhà trẻ.
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">6. Những tiện ích sẽ được hoàn thành vào lúc bàn giao nhà không?</div>
                    <div class="answer">Đúng, các tiện ích sẽ hoàn thành lúc bàn giao nhà.</div>
                </div>
                <div class="qa-item">
                    <div class="question">7. Hồ bơi sâu, rộng và dài bao nhiêu?</div>
                    <div class="answer">
                        <ul>
                            <li>Hồ bơi trẻ em: 0,6m x 4,5m x 10m</li>
                            <li>Hồ bơi người lớn: 1,2m x 6m x 29m</li>
                        </ul>
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">8 & 9. Chi phí tiền điện/nước và Hệ thống thông gió phòng tắm?</div>
                    <div class="answer">
                        <ul>
                            <li>Điện/nước: Theo giá của Cơ quan Nhà nước.</li>
                            <li>Phòng tắm: Có thiết kế hệ thống hút mùi/thông gió cơ học.</li>
                        </ul>
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">10. Có bao nhiêu điểm đón/trả (drop-off) và Lối ra/vào dự án nằm ở đâu?</div>
                    <div class="answer">Có 1 lối ra và 1 lối vào dự án trên mặt đường Trần Quang Diệu. Có 2 vị trí
                        drop-off tại khu vực sảnh của 2 tháp.</div>
                </div>
            </div>
        </div>

        <!-- TAB E -->
        <div id="tab-E" class="tab-content">
            <div class="qa-section">
                <div class="qa-item">
                    <div class="question">1. Chủ đầu tư cung cấp phần nội thất nào?</div>
                    <div class="answer">Các căn hộ sẽ được bàn giao hoàn thiện, bao gồm nội thất dính tường ở khu vực
                        bếp và phòng tắm. Chi tiết được mô tả trong bản Đặc tính kỹ thuật kèm HĐ.</div>
                </div>
                <div class="qa-item">
                    <div class="question">2. Chủ nhà có thể thiết kế lại căn hộ của họ không?</div>
                    <div class="answer">Được phép thay đổi thiết kế, trang trí bên trong nếu không ảnh hưởng kết cấu,
                        với chi phí do khách hàng chịu và phải được Ban quản lý chấp thuận. Không được thay đổi thiết
                        kế/kiến trúc bên ngoài.</div>
                </div>
                <div class="qa-item">
                    <div class="question">3, 4, 5. Chiều sâu balcony, Chiều cao trần nhà, Ổ cắm TV & điện thoại?</div>
                    <div class="answer">
                        <ul>
                            <li>Chiều sâu balcony: 1,1m</li>
                            <li>Chiều cao trần: Phòng khách/bếp/ngủ: 2,6m; Vệ sinh: 2,4m</li>
                            <li>Ổ cắm: TV có tại Phòng khách và phòng ngủ. Không thiết kế đường dây điện thoại cố định.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="qa-item">
                    <div class="question">6 & 7. Cửa sổ dùng kính gì? Internet và truyền hình cáp có sẵn không?</div>
                    <div class="answer">Cửa sổ dùng kính an toàn. Được lắp đặt sẵn đường truyền và cổng kết nối
                        internet/truyền hình cáp.</div>
                </div>
                <div class="qa-item">
                    <div class="question">8. Có máy nước nóng và vòi nước nóng lạnh trong nhà tắm không?</div>
                    <div class="answer">Chỉ cung cấp đường chờ, không bao gồm thiết bị máy nước nóng.</div>
                </div>
                <div class="qa-item">
                    <div class="question">9 & 10. Có hệ thống báo cháy trong mỗi căn hộ và máy phát điện dự phòng không?
                    </div>
                    <div class="answer">Có hệ thống báo cháy trong từng căn. Có máy phát điện dự phòng cho khu vực công
                        cộng và hệ thống PCCC.</div>
                </div>
                <div class="qa-item">
                    <div class="question">11, 12, 13. Vấn đề đậu xe: số lượng chỗ, số tầng hầm, chỗ cho khách?</div>
                    <div class="answer">Dự án có 2 tầng hầm. Tổng diện tích để xe thiết kế khoảng 6.061,35m2, đủ đáp ứng
                        nhu cầu cư dân và có chỗ đậu xe cho khách tại tầng hầm.</div>
                </div>
                <div class="qa-item">
                    <div class="question">14, 15, 16. Hệ thống chiếu sáng, điều hòa và vị trí dàn nóng?</div>
                    <div class="answer">Bàn giao hệ thống chiếu sáng theo thiết kế. Điều hòa chỉ có sẵn đường chờ. Dàn
                        nóng máy lạnh đặt tại ban công hoặc lô gia.</div>
                </div>
                <div class="qa-item">
                    <div class="question">17. Khách hàng có thể ghép 2 căn hộ liền kề thành 1 căn không?</div>
                    <div class="answer">Cần phải được sự chấp thuận bởi Ban quản lý, vận hành và không ảnh hưởng kết cấu
                        chung.</div>
                </div>
                <div class="qa-item">
                    <div class="question">18 & 19. Có thể thay đổi vật liệu hoàn thiện hoặc bỏ bớt nội thất để giảm giá
                        không?</div>
                    <div class="answer">Không.</div>
                </div>
            </div>
        </div>

        <!-- TAB F -->
        <div id="tab-content">
            <div id="tab-F" class="tab-content">
                <div class="qa-section">
                    <div class="qa-item">
                        <div class="question">1 & 2. Khi nào chính thức công bố thông tin và Khi nào dự án hoàn thành?
                        </div>
                        <div class="answer">
                            <ul>
                                <li>Công bố thông tin: Dự kiến Quý 4/2025</li>
                                <li>Hoàn thành giao nhà: Dự kiến Quý 4/2027</li>
                            </ul>
                        </div>
                    </div>
                    <div class="qa-item">
                        <div class="question">3, 4, 5, 6. Thông tin về Phí Đăng ký (Booking)?</div>
                        <div class="answer">
                            <ul>
                                <li>Mức phí: 35.000.000 đồng nhằm mục đích nhận thông tin và tham dự sự kiện.</li>
                                <li>Chuyển nhượng: Không được chuyển nhượng/thay đổi tên trên Phiếu Đăng Ký trừ khi CĐT
                                    đồng ý.</li>
                                <li>Hoàn trả: Nếu khách hàng không ký lựa chọn giao dịch, phí được hoàn trả trong 14
                                    ngày làm việc.</li>
                                <li>Hình thức thanh toán: Chỉ áp dụng thẻ tín dụng hoặc chuyển khoản, không dùng tiền
                                    mặt.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="qa-item">
                        <div class="question">7. Thời hạn sở hữu căn hộ tại dự án Fenica là bao lâu?</div>
                        <div class="answer">Người Việt Nam: Sở hữu lâu dài. Người nước ngoài: 50 năm (có thể gia hạn
                            theo pháp luật).</div>
                    </div>
                    <div class="qa-item">
                        <div class="question">8. Khách hàng sẽ ký các loại hợp đồng nào khi mua căn hộ?</div>
                        <div class="answer">
                            <ul>
                                <li>Thỏa Thuận Tư Vấn (khi thanh toán 10%)</li>
                                <li>Hợp Đồng Mua Bán (khi thanh toán từ 20% trở lên)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="qa-item">
                        <div class="question">9. Ngoài thuế GTGT và Phí Quản lí, Người Mua phải trả thêm các khoản phí
                            nào?</div>
                        <div class="answer">Kinh phí Bảo Trì (2% giá bán), Phí Trước Bạ (0.5% theo quy định) và các loại
                            phí khác theo quy định pháp luật tại thời điểm cấp sổ.</div>
                    </div>
                    <div class="qa-item">
                        <div class="question">10. Dự án liên kết với các ngân hàng nào?</div>
                        <div class="answer">ACB, BIDV, MB Bank, Nam Á Bank, Vietcombank, Vietinbank.</div>
                    </div>
                    <div class="qa-item">
                        <div class="question">11 & 12. Phí bảo trì và Thuế TNCN khi chuyển nhượng áp dụng như thế nào?
                        </div>
                        <div class="answer">
                            <ul>
                                <li>Phí bảo trì: 2% giá bán trước VAT (áp dụng chung VN và nước ngoài).</li>
                                <li>Thuế TNCN khi chuyển nhượng: Mức hiện tại là 2% trên giá trị giao dịch.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Xử lý chuyển Tabs
                const tabLinks = document.querySelectorAll('.tab-link');
                const tabContents = document.querySelectorAll('.tab-content');

                tabLinks.forEach(link => {
                    link.addEventListener('click', function () {
                        const tabId = this.getAttribute('data-tab');

                        tabLinks.forEach(l => l.classList.remove('current'));
                        tabContents.forEach(c => c.classList.remove('current'));

                        this.classList.add('current');
                        document.getElementById(tabId).classList.add('current');

                        // Reset tìm kiếm khi chuyển tab (tùy chọn)
                        // searchInput.value = '';
                        // performSearch('');
                    });
                });

                // Xử lý Accordion (Click hiện câu trả lời)
                const questions = document.querySelectorAll('.question');
                questions.forEach(question => {
                    question.addEventListener('click', function () {
                        this.parentElement.classList.toggle('active');
                    });
                });

                // Xử lý Tìm kiếm
                const searchInput = document.getElementById('searchInput');
                const qaItems = document.querySelectorAll('.qa-item');
                const noResults = document.getElementById('noResults');
                const tabContainer = document.querySelector('.tabs');

                searchInput.addEventListener('input', function () {
                    performSearch(this.value);
                });

                function performSearch(searchTerm) {
                    let hasResults = false;
                    // Chuyển về tiếng Việt không dấu để tìm kiếm chính xác hơn
                    const cleanSearchTerm = removeVietnameseTones(searchTerm.toLowerCase().trim());

                    if (cleanSearchTerm === '') {
                        // Nếu ô tìm kiếm trống, hiện lại tab hiện tại và đóng hết accordion
                        tabContainer.style.display = 'flex';
                        noResults.style.display = 'none';

                        // Hiện lại đúng nội dung của tab đang được chọn
                        const currentTabLink = document.querySelector('.tab-link.current');
                        const currentTabId = currentTabLink.getAttribute('data-tab');

                        tabContents.forEach(content => {
                            content.style.display = (content.id === currentTabId) ? 'block' : 'none';
                        });

                        qaItems.forEach(item => {
                            item.style.display = 'block';
                            item.classList.remove('active'); // Đóng câu trả lời
                            removeHighlight(item);
                        });
                        return;
                    }

                    // Khi đang tìm kiếm, ẩn thanh tab, hiện tất cả nội dung để lọc
                    tabContainer.style.display = 'none';
                    tabContents.forEach(content => content.style.display = 'block');

                    qaItems.forEach(item => {
                        const questionText = item.querySelector('.question').innerText;
                        const answerText = item.querySelector('.answer').innerText;
                        const combinedText = (questionText + ' ' + answerText).toLowerCase();
                        const cleanCombinedText = removeVietnameseTones(combinedText);

                        if (cleanCombinedText.includes(cleanSearchTerm)) {
                            item.style.display = 'block';
                            item.classList.add('active'); // Mở câu trả lời khi tìm thấy
                            hasResults = true;
                            highlightText(item, searchTerm); // Tô vàng từ khóa
                        } else {
                            item.style.display = 'none';
                            item.classList.remove('active');
                            removeHighlight(item);
                        }
                    });

                    noResults.style.display = hasResults ? 'none' : 'block';
                }

                // Hàm hỗ trợ xóa dấu tiếng Việt
                function removeVietnameseTones(str) {
                    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
                    str = str.replace(/è|é|ẹ|ẻ|ã|ê|ề|ế|ệ|ể|ễ/g, "e");
                    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
                    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
                    str = str.replace(/ù|ú|ụ|ủ|ữ|ư|ừ|ứ|ự|ử|ữ/g, "u");
                    str = str.replace(/ỳ|ý|ỵ|ỷ|ĩ/g, "y");
                    str = str.replace(/đ/g, "d");
                    str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
                    str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
                    str = str.replace(/Ì|Í|Ị|ỉ|Ĩ/g, "I");
                    str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
                    str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
                    str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
                    str = str.replace(/Đ/g, "D");
                    // Một vài bộ encode coi các dấu là các kí tự riêng biệt nên thêm vào cho chắc
                    str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // Huyền, sắc, hỏi, ngã, nặng 
                    str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // Â, Ê, Ư
                    return str;
                }

                // Hàm tô vàng từ khóa (chỉ tô trên text gốc, không phá hỏng HTML)
                function highlightText(element, searchTerm) {
                    removeHighlight(element); // Xóa highlight cũ trước
                    if (!searchTerm.trim()) return;

                    const questionEl = element.querySelector('.question');
                    const answerEl = element.querySelector('.answer');

                    [questionEl, answerEl].forEach(el => {
                        // Chỉ xử lý các text node để không làm hỏng thẻ HTML bên trong (như <ul>, <table>)
                        const innerHTML = el.innerHTML;
                        // Tạo regex tìm kiếm không phân biệt hoa thường, có dấu
                        try {
                            const regex = new RegExp(`(${searchTerm.trim()})`, 'gi');
                            // Tuy nhiên cách này đơn giản nhưng có thể phá hỏng thẻ HTML nếu từ khóa trùng với tên thẻ.
                            // Giải pháp an toàn hơn là duyệt NodeTree, nhưng phức tạp hơn nhiều.
                            // Vì nội dung FAQ này đơn giản, ta dùng cách thay thế tạm thời.
                            if (!innerHTML.includes('<table') && !innerHTML.includes('<ul')) {
                                el.innerHTML = innerHTML.replace(regex, '<span class="highlight">$1</span>');
                            }
                        } catch (e) { console.error("Search regex error", e); }
                    });
                }

                function removeHighlight(element) {
                    const highlights = element.querySelectorAll('.highlight');
                    highlights.forEach(span => {
                        span.outerHTML = span.innerText; // Thay thế <span class='highlight'>text</span> bằng text
                    });
                }
            });
        </script>
</main>

<?php
get_footer();
