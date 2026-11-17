<?php
   $this->load->view('header');
   $this->load->view('header_end');
?>

<!-- ==========================================================================
     TOP ANNOUNCEMENT BAR
     ========================================================================== -->
<div class="site-topbar">
    <div class="topbar-fluid">
        <div class="topbar-center-content">
            <span class="topbar-badge"><span class="pulse-dot"></span> ĐỀ XUẤT HỢP TÁC CHIẾN LƯỢC</span>
            <span class="topbar-text">Gọn Khỏe by Qcare Health &bull; Chăm sóc chuyển hóa &amp; Thể thao cá nhân hóa</span>
            <span class="topbar-divider">|</span>
            <a href="tel:0353538887" class="topbar-link">
                <i class="fas fa-phone-alt"></i>
                <span>Hotline: 035.353.8887</span>
            </a>
        </div>
    </div>
</div>

<!-- ==========================================================================
     STICKY NAVIGATION HEADER (FULL-WIDTH)
     ========================================================================== -->
<header class="site-header">
    <div class="header-fluid">
        <a href="<?php echo base_url(); ?>" class="site-logo" title="Gọn Khỏe by Qcare">
            <img src="<?php echo base_url(); ?>images/logo.png" alt="Gọn Khỏe by Qcare Logo">
        </a>

        <nav class="nav-desktop">
            <a href="#ve-gon-khoe" class="nav-link">Về Gọn Khỏe</a>
            <a href="#co-hoi" class="nav-link">Nhu cầu Hội viên</a>
            <a href="#dich-vu" class="nav-link">Dịch vụ &amp; Vai trò</a>
            <a href="#fit-and-lean" class="nav-link">Fit &amp; Lean 12 tuần</a>
            <a href="#gia-tri-gym" class="nav-link">Lợi ích phòng Gym</a>
            <a href="#revenue-calculator" class="nav-link">Mô phỏng doanh thu</a>
            <a href="#hinh-thuc-hop-tac" class="nav-link">Hình thức hợp tác</a>
            <a href="#faqs" class="nav-link">Hỏi đáp</a>
        </nav>

        <div class="header-actions">
            <a href="#form-hop-tac" class="btn-header-cta">
                <i class="fas fa-handshake"></i>
                <span>Đăng ký trao đổi 30p</span>
            </a>
            <button type="button" class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Mở Menu">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-drawer-backdrop" id="mobileNavBackdrop"></div>
<div class="mobile-nav-drawer" id="mobileNavDrawer">
    <div>
        <div class="mobile-drawer-header">
            <img src="<?php echo base_url(); ?>images/logo.png" alt="Gọn Khỏe Logo" style="height: 38px;">
            <button type="button" class="mobile-drawer-close" id="mobileNavClose" aria-label="Đóng Menu">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="mobile-nav-links">
            <a href="#ve-gon-khoe" class="mobile-nav-link">Về Gọn Khỏe</a>
            <a href="#co-hoi" class="mobile-nav-link">Nhu cầu Hội viên</a>
            <a href="#dich-vu" class="mobile-nav-link">Dịch vụ &amp; Vai trò</a>
            <a href="#fit-and-lean" class="mobile-nav-link">Fit &amp; Lean 12 Tuần</a>
            <a href="#gia-tri-gym" class="mobile-nav-link">Lợi ích Phòng Gym</a>
            <a href="#revenue-calculator" class="mobile-nav-link">Mô phỏng Doanh thu</a>
            <a href="#hinh-thuc-hop-tac" class="mobile-nav-link">Hình thức Hợp tác</a>
            <a href="#hanh-trinh" class="mobile-nav-link">Hành trình 5 Bước</a>
            <a href="#faqs" class="mobile-nav-link">Hỏi đáp</a>
        </div>
    </div>
    <div style="margin-top: 24px;">
        <a href="#form-hop-tac" class="btn-primary" style="width: 100%;">
            <i class="fas fa-handshake"></i> Đặt lịch trao đổi 30p
        </a>
    </div>
</div>

<!-- ==========================================================================
     HERO SECTION
     ========================================================================== -->
<section class="hero-section" id="hero">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="hero-tagline">
                    <i class="fas fa-shield-heart"></i> GIẢI PHÁP ĐỘT PHÁ CHO FITNESS &amp; GYM
                </div>
                <h1 class="hero-title">
                    <span class="brand-qcare">GỌN KHỎE by Qcare</span>
                    Hợp tác cùng <span class="highlight-lime">phòng Gym</span>
                </h1>
                <p class="hero-desc">
                    Chăm sóc cân nặng và sức khỏe chuyển hóa chuẩn y khoa kết hợp tập luyện cá nhân hóa cùng đội ngũ PT – nâng cao tỷ lệ giữ chân hội viên và bứt phá doanh thu cho phòng tập.
                </p>

                <div class="hero-keypoints">
                    <div class="hero-keypoint-item">
                        <i class="fas fa-user-md"></i>
                        <div class="hero-keypoint-text">Đội ngũ y khoa &amp; dinh dưỡng chuyên sâu đồng hành</div>
                    </div>
                    <div class="hero-keypoint-item">
                        <i class="fas fa-chart-line"></i>
                        <div class="hero-keypoint-text">Tăng doanh thu PT tới 24.000.000đ+/tháng/chi nhánh</div>
                    </div>
                    <div class="hero-keypoint-item">
                        <i class="fas fa-dumbbell"></i>
                        <div class="hero-keypoint-text">PT giữ vai trò trung tâm trong giáo án tập luyện</div>
                    </div>
                    <div class="hero-keypoint-item">
                        <i class="fas fa-store"></i>
                        <div class="hero-keypoint-text">Điểm tiếp nhận Express gọn nhẹ chỉ 2 &ndash; 4 m² tại Gym</div>
                    </div>
                </div>

                <div class="hero-cta-group">
                    <a href="#form-hop-tac" class="btn-primary">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Đặt lịch trao đổi 30 phút</span>
                    </a>
                    <a href="#revenue-calculator" class="btn-secondary">
                        <i class="fas fa-calculator"></i>
                        <span>Mô phỏng doanh thu PT</span>
                    </a>
                </div>
            </div>

            <div class="hero-media">
                <div class="hero-image-card">
                    <div class="hero-image-wrapper">
                        <img src="<?php echo base_url(); ?>images/main.webp" alt="Gọn Khỏe Hợp tác cùng Phòng Gym" class="hero-main-img">
                        <div class="hero-image-overlay"></div>
                    </div>

                    <!-- Floating dynamic badges -->
                    <div class="floating-badge badge-top-right">
                        <div class="floating-badge-icon">
                            <i class="fas fa-fire-alt"></i>
                        </div>
                        <div class="floating-badge-text">
                            <div class="badge-label">Chương trình liên kết</div>
                            <div class="badge-val">Fit &amp; Lean 12 Tuần</div>
                        </div>
                    </div>

                    <div class="floating-badge badge-bottom-left">
                        <div class="floating-badge-icon">
                            <i class="fas fa-arrow-trend-up"></i>
                        </div>
                        <div class="floating-badge-text">
                            <div class="badge-label">Tái ký &amp; Giữ chân HV</div>
                            <div class="badge-val">+35% Hiệu suất PT</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats Ribbon -->
        <div class="hero-stats-ribbon">
            <div class="stat-item">
                <div class="stat-number">12 Tuần</div>
                <div class="stat-label">Lộ trình Fit &amp; Lean chuẩn hóa</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">2 &ndash; 4 m²</div>
                <div class="stat-label">Diện tích điểm tiếp nhận Express</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">40%</div>
                <div class="stat-label">Biên đóng góp lợi nhuận PT dự kiến</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">Minh bạch</div>
                <div class="stat-label">Cơ chế tài chính &amp; Bảo mật hội viên</div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION: VỀ GỌN KHỎE & QCARE HEALTH (Slides 2, 3)
     ========================================================================== */
-->
<section class="about-section" id="ve-gon-khoe">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-hospital-user"></i> VỀ GỌN KHỎE &amp; QCARE HEALTH</span>
            <h2 class="section-title">Trung tâm Cân nặng &amp; <span class="text-accent">Sức khỏe Chuyển hóa</span></h2>
            <p class="section-subtitle">
                Gọn Khỏe do Qcare Health trực tiếp vận hành, mang đến năng lực y khoa lâm sàng gắn liền với mục tiêu thực tế của hội viên thể hình.
            </p>
        </div>

        <div class="about-grid">
            <div class="about-card">
                <div class="about-icon-box">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <h3 class="about-card-title">Chuyên môn y khoa gắn với nhu cầu thực tế</h3>
                <p class="about-card-desc">
                    Quản lý cân nặng, béo phì, kháng insulin, rối loạn lipid máu và các vấn đề chuyển hóa chuyên sâu. Kết nối xét nghiệm và chẩn đoán y khoa với bài toán vóc dáng.
                </p>
            </div>

            <div class="about-card">
                <div class="about-icon-box">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3 class="about-card-title">Chương trình chăm sóc liên tục</h3>
                <p class="about-card-desc">
                    Đánh giá ban đầu, thiết kế chế độ dinh dưỡng cá nhân hóa, xét nghiệm theo dõi định kỳ, tái khám và đồng hành hỗ trợ hội viên duy trì kết quả dài hạn bền vững.
                </p>
            </div>

            <div class="about-card">
                <div class="about-icon-box">
                    <i class="fas fa-handshake-angle"></i>
                </div>
                <h3 class="about-card-title">Phối hợp cùng đội ngũ PT đối tác</h3>
                <p class="about-card-desc">
                    Phân công rõ ràng: Gọn Khỏe phụ trách chăm sóc y khoa và dinh dưỡng. Gym và PT tập trung tổ chức tập luyện, chỉnh kỹ thuật và nâng cao trải nghiệm hội viên.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION: CƠ HỘI HỢP TÁC BẮT ĐẦU TỪ HỘI VIÊN (Slide 4)
     ========================================================================== -->
<section class="painpoints-section" id="co-hoi">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-bullseye"></i> GIẢI QUYẾT ĐÚNG NHU CẦU</span>
            <h2 class="section-title">Cơ hội hợp tác <span class="text-accent">bắt đầu từ Hội viên</span></h2>
            <p class="section-subtitle">
                Những nút thắt phổ biến khiến hội viên chững cân, nản chí và bỏ tập – nay có thêm giải pháp đồng hành nhờ sự kết hợp giữa Y khoa và Thể hình.
            </p>
        </div>

        <div class="painpoints-grid">
            <div class="painpoint-card">
                <div class="painpoint-num">01</div>
                <h3 class="painpoint-heading">Tập đều nhưng chưa đạt mục tiêu</h3>
                <p class="painpoint-text">
                    Hội viên tập luyện rất chăm chỉ nhưng cân nặng hoặc mỡ bụng không cải thiện do chưa hiểu rõ dinh dưỡng, chuyển hóa nội tại và các rào cản sức khỏe tiềm ẩn.
                </p>
                <div class="painpoint-solution">
                    <i class="fas fa-check-circle"></i> Đánh giá y khoa chuyển hóa &amp; tái cân bằng dinh dưỡng.
                </div>
            </div>

            <div class="painpoint-card">
                <div class="painpoint-num">02</div>
                <h3 class="painpoint-heading">Muốn giảm cân và vẫn duy trì sức mạnh</h3>
                <p class="painpoint-text">
                    Nhu cầu cấp thiết cần phối hợp kế hoạch ăn uống khoa học với bài tập kháng lực phù hợp để tối ưu giảm mỡ mà vẫn bảo toàn khối lượng cơ bắp.
                </p>
                <div class="painpoint-solution">
                    <i class="fas fa-check-circle"></i> Bác sĩ lên thực đơn, PT xây dựng phác đồ kháng lực.
                </div>
            </div>

            <div class="painpoint-card">
                <div class="painpoint-num">03</div>
                <h3 class="painpoint-heading">Cần hỗ trợ sau giai đoạn giảm cân</h3>
                <p class="painpoint-text">
                    Sau khi giảm cân thành công, hội viên rất dễ tăng cân trở lại (hiệu ứng yoyo). Họ cần lịch theo dõi chỉ số y tế định kỳ và duy trì thói quen tập luyện lâu dài.
                </p>
                <div class="painpoint-solution">
                    <i class="fas fa-check-circle"></i> Lịch kiểm tra định kỳ &amp; duy trì gắn kết với PT.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION: DANH MỤC DỊCH VỤ & VAI TRÒ CỦA GYM (Slide 5)
     ========================================================================== -->
<section class="services-section" id="dich-vu">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-layer-group"></i> LỘ TRÌNH 4 CẤP ĐỘ</span>
            <h2 class="section-title">Danh mục dịch vụ <span class="text-accent">Gọn Khỏe</span></h2>
            <p class="section-subtitle">
                Một lộ trình khoa học phù hợp với từng cá nhân &bull; Phân định vai trò tương hỗ rõ nét giữa Gọn Khỏe và Phòng Gym.
            </p>
        </div>

        <div class="services-grid">
            <!-- CHECK -->
            <div class="service-card">
                <div>
                    <span class="service-badge-code">CHECK</span>
                    <h3 class="service-name">Đánh giá cân nặng &amp; Chuyển hóa</h3>
                    <p class="service-target">
                        Khám sàng lọc, phân tích thành phần cơ thể, đo lường các chỉ số nguy cơ rối loạn chuyển hóa ban đầu.
                    </p>
                </div>
                <div class="service-gym-role">
                    <div class="service-gym-role-label">
                        <i class="fas fa-dumbbell"></i> Vai trò của Gym
                    </div>
                    <div class="service-gym-role-text">
                        Giới thiệu hội viên tự nguyện tham gia đánh giá sức khỏe.
                    </div>
                </div>
            </div>

            <!-- LOSE -->
            <div class="service-card">
                <div>
                    <span class="service-badge-code">LOSE</span>
                    <h3 class="service-name">Chăm sóc giảm cân có theo dõi</h3>
                    <p class="service-target">
                        Phác đồ giảm mỡ chuẩn y khoa, can thiệp dinh dưỡng cá nhân hóa, theo dõi lâm sàng và điều chỉnh liều lượng nếu cần.
                    </p>
                </div>
                <div class="service-gym-role">
                    <div class="service-gym-role-label">
                        <i class="fas fa-dumbbell"></i> Vai trò của Gym
                    </div>
                    <div class="service-gym-role-text">
                        Phối hợp thiết kế bài tập kháng lực và vận động phù hợp thể trạng.
                    </div>
                </div>
            </div>

            <!-- REMIT -->
            <div class="service-card">
                <div>
                    <span class="service-badge-code">REMIT</span>
                    <h3 class="service-name">Chăm sóc chuyển hóa theo chỉ định</h3>
                    <p class="service-target">
                        Theo sát các bệnh lý chuyển hóa phối hợp (tiền tiểu đường, mỡ máu, acid uric...) dưới sự giám sát của bác sĩ chuyên khoa.
                    </p>
                </div>
                <div class="service-gym-role">
                    <div class="service-gym-role-label">
                        <i class="fas fa-dumbbell"></i> Vai trò của Gym
                    </div>
                    <div class="service-gym-role-text">
                        Điều chỉnh cường độ tập theo khuyến nghị của chuyên môn.
                    </div>
                </div>
            </div>

            <!-- KEEP -->
            <div class="service-card">
                <div>
                    <span class="service-badge-code">KEEP</span>
                    <h3 class="service-name">Duy trì kết quả &amp; Thói quen</h3>
                    <p class="service-target">
                        Bảo toàn vóc dáng, ngăn ngừa tăng cân tái phát, hỗ trợ hội viên duy trì lối sống khỏe khoắn trọn đời.
                    </p>
                </div>
                <div class="service-gym-role">
                    <div class="service-gym-role-label">
                        <i class="fas fa-dumbbell"></i> Vai trò của Gym
                    </div>
                    <div class="service-gym-role-text">
                        Tiếp tục duy trì gói PT hoặc lịch tập luyện phù hợp.
                    </div>
                </div>
            </div>
        </div>

        <div class="services-disclaimer">
            * REMIT là định hướng chăm sóc. Khả năng thuyên giảm tùy thuộc bệnh lý và cơ địa từng người, không phải cam kết kết quả.
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION: FIT & LEAN 12 WEEKS & PT CENTER STAGE (Slides 6 & 9)
     ========================================================================== -->
<section class="fitlean-section" id="fit-and-lean">
    <div class="container">
        <div class="fitlean-box">
            <div class="fitlean-header">
                <span class="section-badge"><i class="fas fa-bolt"></i> CHƯƠNG TRÌNH TRỌNG TÂM</span>
                <h2 class="fitlean-title">Fit &amp; Lean &ndash; Phối hợp trong 12 tuần</h2>
                <div class="fitlean-sub">Hội viên nhận kế hoạch phối hợp và các mốc đánh giá rõ ràng</div>
            </div>

            <div class="fitlean-dual-cols">
                <!-- Gọn Khỏe -->
                <div class="fitlean-col">
                    <div class="fitlean-col-header">
                        <div class="fitlean-col-icon"><i class="fas fa-notes-medical"></i></div>
                        <h3 class="fitlean-col-title">GỌN KHỎE by Qcare</h3>
                    </div>
                    <ul class="fitlean-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Đánh giá y khoa:</strong> Phân tích chuyển hóa, khám sàng lọc và thiết lập mục tiêu cá nhân.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Tư vấn dinh dưỡng:</strong> Lập thực đơn khoa học, phù hợp thói quen và lịch tập gym.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Theo dõi &amp; Tái khám:</strong> Đánh giá các mốc tuần 4 - 8 - 12 để theo dõi và điều chỉnh tiến độ phù hợp.</span>
                        </li>
                    </ul>
                </div>

                <!-- Gym / PT -->
                <div class="fitlean-col">
                    <div class="fitlean-col-header">
                        <div class="fitlean-col-icon"><i class="fas fa-person-running"></i></div>
                        <h3 class="fitlean-col-title">GYM &amp; ĐỘI NGŨ PT</h3>
                    </div>
                    <ul class="fitlean-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Lập kế hoạch tập:</strong> Xây dựng giáo án vận động cá nhân hóa theo từng thể trạng.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Hướng dẫn kỹ thuật:</strong> Đồng hành chỉnh chuẩn từng form động tác, đảm bảo an toàn.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Theo dõi việc tập luyện:</strong> Khích lệ tinh thần, giám sát lịch tập đều đặn hàng tuần.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- PT Banner Center Role (Slide 9) -->
            <div class="fitlean-pt-banner">
                <div class="pt-banner-text">
                    <h4><i class="fas fa-crown"></i> PT giữ vai trò trung tâm trong tập luyện</h4>
                    <p>Gọn Khỏe hỗ trợ phần chăm sóc ngoài chuyên môn của PT, giúp PT thăng hoa giá trị và gắn kết hội viên bền chặt.</p>
                </div>
                <div class="pt-banner-features">
                    <div class="pt-pill">
                        <i class="fas fa-database"></i> Thêm cơ sở khoa học để phối hợp
                    </div>
                    <div class="pt-pill">
                        <i class="fas fa-comments"></i> Thêm điểm chạm đồng hành
                    </div>
                    <div class="pt-pill">
                        <i class="fas fa-calendar-alt"></i> Thêm cơ hội duy trì lịch tập PT
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION: NHỮNG HỘI VIÊN PHÙ HỢP ĐỂ GIỚI THIỆU (Slide 7)
     ========================================================================== -->
<section class="suitable-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-users-viewfinder"></i> ĐỐI TƯỢNG PHÙ HỢP</span>
            <h2 class="section-title">Những hội viên <span class="text-accent">phù hợp để giới thiệu</span></h2>
            <p class="section-subtitle">
                Người trưởng thành tự nguyện tìm hiểu chương trình &bull; 3 nhóm hội viên có nhu cầu chuyển đổi cao nhất tại phòng Gym.
            </p>
        </div>

        <div class="suitable-grid">
            <div class="suitable-card">
                <div class="suitable-icon"><i class="fas fa-scale-unbalanced"></i></div>
                <h3 class="suitable-card-title">Có nhu cầu quản lý cân nặng</h3>
                <p class="suitable-card-desc">
                    Hội viên muốn giảm mỡ toàn thân, cải thiện số đo vòng eo hoặc cần đội ngũ y tế hỗ trợ tháo gỡ khi tiến độ giảm cân bị chững lại nhiều tuần.
                </p>
            </div>

            <div class="suitable-card">
                <div class="suitable-icon"><i class="fas fa-heart-pulse"></i></div>
                <h3 class="suitable-card-title">Có vấn đề sức khỏe cần đánh giá</h3>
                <p class="suitable-card-desc">
                    Hội viên thừa cân kèm tiền sử rối loạn chuyển hóa (mỡ máu, đường huyết, gan nhiễm mỡ) hoặc được bác sĩ khuyên phải chủ động điều chỉnh lối sống.
                </p>
            </div>

            <div class="suitable-card">
                <div class="suitable-icon"><i class="fas fa-person-walking-dashed-line-arrow-right"></i></div>
                <h3 class="suitable-card-title">Đang giảm cân &amp; Muốn có hướng dẫn</h3>
                <p class="suitable-card-desc">
                    Cần sự phối hợp nhịp nhàng giữa dinh dưỡng cá nhân, theo dõi y tế chặt chẽ và mục tiêu vận động thể lực an toàn từ huấn luyện viên cá nhân.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION: GIÁ TRỊ DÀNH CHO PHÒNG GYM (Slide 8)
     ========================================================================== -->
<section class="value-gym-section" id="gia-tri-gym">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-award"></i> LỢI ÍCH ĐỐI TÁC</span>
            <h2 class="section-title">Giá trị thiết thực <span class="text-accent">dành cho phòng Gym</span></h2>
            <p class="section-subtitle">
                Các lợi ích kinh doanh và uy tín dịch vụ được đo lường cụ thể ngay trong giai đoạn thử nghiệm.
            </p>
        </div>

        <div class="value-grid">
            <div class="value-card">
                <div class="value-card-icon"><i class="fas fa-money-bill-trend-up"></i></div>
                <h3 class="value-card-title">Thêm doanh thu PT</h3>
                <p class="value-card-how">Người tham gia chương trình mua thêm buổi tập phù hợp để đảm bảo hiệu quả.</p>
                <div class="value-card-metric">
                    <div class="metric-label">Chỉ số theo dõi</div>
                    <div class="metric-val">Số buổi PT tăng thêm thực hiện &amp; thu tiền</div>
                </div>
            </div>

            <div class="value-card">
                <div class="value-card-icon"><i class="fas fa-user-lock"></i></div>
                <h3 class="value-card-title">Hỗ trợ giữ chân hội viên</h3>
                <p class="value-card-how">Có mục tiêu đo lường rõ ràng và lịch đánh giá y khoa phối hợp định kỳ.</p>
                <div class="value-card-metric">
                    <div class="metric-label">Chỉ số theo dõi</div>
                    <div class="metric-val">Tỷ lệ hội viên tiếp tục tập và tái ký hợp đồng</div>
                </div>
            </div>

            <div class="value-card">
                <div class="value-card-icon"><i class="fas fa-gem"></i></div>
                <h3 class="value-card-title">Khác biệt hóa dịch vụ</h3>
                <p class="value-card-how">Nâng tầm Gym thành trung tâm chăm sóc sức khỏe toàn diện, kết nối y khoa chuyên sâu.</p>
                <div class="value-card-metric">
                    <div class="metric-label">Chỉ số theo dõi</div>
                    <div class="metric-val">Mức độ hài lòng &amp; phản hồi tích cực của hội viên</div>
                </div>
            </div>

            <div class="value-card">
                <div class="value-card-icon"><i class="fas fa-user-plus"></i></div>
                <h3 class="value-card-title">Thêm nguồn khách mới</h3>
                <p class="value-card-how">Cơ chế giới thiệu hai chiều theo nguyện vọng của khách hàng giữa Gọn Khỏe và Gym.</p>
                <div class="value-card-metric">
                    <div class="metric-label">Chỉ số theo dõi</div>
                    <div class="metric-val">Lượng khách hàng mới từ Gọn Khỏe chuyển sang Gym</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION: INTERACTIVE PT REVENUE CALCULATOR (Slide 13)
     ========================================================================== -->
<section class="calculator-section" id="revenue-calculator">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-chart-pie"></i> BẢNG TÍNH LỢI NHUẬN THỰC TẾ</span>
            <h2 class="section-title">Minh họa Doanh thu <span class="text-accent">PT tăng thêm</span></h2>
            <p class="section-subtitle">
                Công cụ mô phỏng doanh thu và đóng góp lợi nhuận trực tiếp cho 1 chi nhánh trong 1 tháng. Bạn có thể chọn kịch bản mẫu từ PDF hoặc tùy chỉnh theo số liệu thực tế của phòng tập.
            </p>
        </div>

        <div class="calculator-wrapper">
            <!-- Preset Buttons from PDF Slide 13 -->
            <div class="calculator-tabs">
                <button type="button" class="calc-tab-btn" data-preset="conservative">
                    <i class="fas fa-shield-alt"></i> Kịch bản Thận trọng (3 HV)
                </button>
                <button type="button" class="calc-tab-btn active" data-preset="base">
                    <i class="fas fa-chart-line"></i> Kịch bản Cơ sở (6 HV)
                </button>
                <button type="button" class="calc-tab-btn" data-preset="optimistic">
                    <i class="fas fa-rocket"></i> Kịch bản Tích cực (10 HV)
                </button>
            </div>

            <div class="calculator-grid">
                <!-- Controls Side -->
                <div class="calc-controls">
                    <!-- Slider 1: Number of Members -->
                    <div class="calc-group">
                        <div class="calc-label-row">
                            <span class="calc-label-title"><i class="fas fa-users text-accent"></i> Số hội viên mua thêm PT</span>
                            <span class="calc-display-val" id="dispMembers">6 hội viên</span>
                        </div>
                        <input type="range" min="1" max="25" value="6" step="1" class="calc-slider" id="calcMembers">
                        <div class="calc-slider-scale">
                            <span>1 HV</span>
                            <span>10 HV</span>
                            <span>25 HV</span>
                        </div>
                    </div>

                    <!-- Slider 2: Sessions per member -->
                    <div class="calc-group">
                        <div class="calc-label-row">
                            <span class="calc-label-title"><i class="fas fa-dumbbell text-accent"></i> Buổi PT tăng thêm / người / tháng</span>
                            <span class="calc-display-val" id="dispSessions">8 buổi/người</span>
                        </div>
                        <input type="range" min="4" max="16" value="8" step="1" class="calc-slider" id="calcSessions">
                        <div class="calc-slider-scale">
                            <span>4 buổi</span>
                            <span>8 buổi (tiêu chuẩn)</span>
                            <span>16 buổi</span>
                        </div>
                    </div>

                    <!-- Slider 3: Price per session -->
                    <div class="calc-group">
                        <div class="calc-label-row">
                            <span class="calc-label-title"><i class="fas fa-tag text-accent"></i> Giá thu thực tế / buổi PT</span>
                            <span class="calc-display-val" id="dispPrice">300.000 đ</span>
                        </div>
                        <input type="range" min="200000" max="600000" value="300000" step="25000" class="calc-slider" id="calcPrice">
                        <div class="calc-slider-scale">
                            <span>200.000 đ</span>
                            <span>300.000 đ</span>
                            <span>600.000 đ</span>
                        </div>
                    </div>

                    <!-- Slider 4: Margin percentage -->
                    <div class="calc-group">
                        <div class="calc-label-row">
                            <span class="calc-label-title"><i class="fas fa-percent text-accent"></i> Biên đóng góp giả định của Gym</span>
                            <span class="calc-display-val" id="dispMargin">40%</span>
                        </div>
                        <input type="range" min="20" max="60" value="40" step="5" class="calc-slider" id="calcMargin">
                        <div class="calc-slider-scale">
                            <span>20%</span>
                            <span>40% (chuẩn PDF)</span>
                            <span>60%</span>
                        </div>
                    </div>
                </div>

                <!-- Results Display Side -->
                <div class="calc-result-card">
                    <div class="calc-result-header">
                        <i class="fas fa-chart-simple text-accent"></i> Kết quả tính toán ước tính (1 tháng / 1 chi nhánh)
                    </div>

                    <div class="calc-main-result">
                        <div class="calc-result-label">Doanh thu PT tăng thêm:</div>
                        <div class="calc-big-revenue" id="calcRevenue">14.400.000 đ</div>
                    </div>

                    <div class="calc-profit-row">
                        <div class="calc-profit-label">
                            <i class="fas fa-coins"></i> Đóng góp sau chi phí trực tiếp:
                        </div>
                        <div class="calc-big-profit" id="calcProfit">5.760.000 đ</div>
                    </div>

                    <ul class="calc-details-list">
                        <li>
                            <span>Tổng số buổi PT phát sinh mới:</span>
                            <strong class="text-white" id="calcTotalSessions">48 buổi PT</strong>
                        </li>
                        <li>
                            <span>Tỷ lệ biên đóng góp tính toán:</span>
                            <strong class="text-white" id="calcProfitMargin">40%</strong>
                        </li>
                        <li>
                            <span>Ước tính cả năm (12 tháng):</span>
                            <strong class="text-accent" id="calcAnnualEst">Đóng góp ~ 69 triệu+/năm</strong>
                        </li>
                    </ul>

                    <div style="margin-top: 24px;">
                        <a href="#form-hop-tac" class="btn-primary" style="width: 100%;">
                            <i class="fas fa-handshake"></i> Đăng ký triển khai kịch bản này
                        </a>
                    </div>

                    <div class="calc-disclaimer">
                        * Ví dụ minh họa cho 1 chi nhánh trong 1 tháng, không phải dự báo hoặc cam kết. Chưa trừ chi phí cố định, triển khai, ưu đãi và thuế. Không tính các buổi đã nằm trong gói PT hiện hữu.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION: BA HÌNH THỨC HỢP TÁC (Slides 11 & 14)
     ========================================================================== -->
<section class="models-section" id="hinh-thuc-hop-tac">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-cubes"></i> MÔ HÌNH TRIỂN KHAI</span>
            <h2 class="section-title">Ba hình thức <span class="text-accent">hợp tác linh hoạt</span></h2>
            <p class="section-subtitle">
                Có thể bắt đầu dễ dàng bằng hoạt động theo lịch tại một chi nhánh thử nghiệm trước khi mở rộng.
            </p>
        </div>

        <div class="models-grid">
            <!-- Hình thức A -->
            <div class="model-card featured">
                <span class="model-top-badge"><i class="fas fa-star"></i> ĐỀ XUẤT KHỞI ĐẦU</span>
                <div class="model-letter">HÌNH THỨC A</div>
                <h3 class="model-title">Chương trình theo buổi</h3>

                <div class="model-desc-box">
                    <div class="model-desc-title">Cách triển khai:</div>
                    <div class="model-desc-text">
                        Tổ chức Workshop dinh dưỡng &amp; y khoa thể thao, đo chỉ số cơ bản cho hội viên, giải đáp câu hỏi và đặt lịch tư vấn.
                    </div>
                </div>

                <div class="model-desc-box">
                    <div class="model-desc-title">Phù hợp khi:</div>
                    <div class="model-desc-text">
                        Phòng Gym muốn kiểm chứng nhu cầu thực tế của hội viên tại chi nhánh trước khi bố trí không gian cố định.
                    </div>
                </div>

                <div class="model-specs">
                    <div class="model-spec-item"><i class="fas fa-check"></i> Không cần chi phí đầu tư ban đầu</div>
                    <div class="model-spec-item"><i class="fas fa-check"></i> Tận dụng hội trường hoặc khu vực chung</div>
                    <div class="model-spec-item"><i class="fas fa-check"></i> Gọn Khỏe cử bác sĩ và chuyên gia đến</div>
                </div>
            </div>

            <!-- Hình thức B -->
            <div class="model-card">
                <div class="model-letter">HÌNH THỨC B</div>
                <h3 class="model-title">Gọn Khỏe Express tại Gym</h3>

                <div class="model-desc-box">
                    <div class="model-desc-title">Cách triển khai:</div>
                    <div class="model-desc-text">
                        Điểm tiếp nhận và đặt hẹn cố định gọn nhẹ chỉ từ <strong>2 &ndash; 4 m²</strong> tại sảnh Gym, bảo vệ sự riêng tư và luồng di chuyển.
                    </div>
                </div>

                <div class="model-desc-box">
                    <div class="model-desc-title">Phù hợp khi:</div>
                    <div class="model-desc-text">
                        Chi nhánh có lưu lượng hội viên đông đúc và hiệu quả hợp tác đã được kiểm chứng qua giai đoạn A.
                    </div>
                </div>

                <div class="model-specs">
                    <div class="model-spec-item"><i class="fas fa-check"></i> Diện tích siêu gọn nhẹ 2 &ndash; 4 m²</div>
                    <div class="model-spec-item"><i class="fas fa-check"></i> Đo chỉ số cơ bản &amp; đặt hẹn chuyên khoa</div>
                    <div class="model-spec-item"><i class="fas fa-check"></i> Không lưu trữ hoặc cấp phát thuốc tại Gym</div>
                </div>
            </div>

            <!-- Hình thức C -->
            <div class="model-card">
                <div class="model-letter">HÌNH THỨC C</div>
                <h3 class="model-title">Quyền lợi gói Hội viên</h3>

                <div class="model-desc-box">
                    <div class="model-desc-title">Cách triển khai:</div>
                    <div class="model-desc-text">
                        Gym mua số suất đánh giá hoặc chăm sóc chuyển hóa theo số lượng lớn để đưa vào quyền lợi đặc quyền của gói thẻ hội viên VIP.
                    </div>
                </div>

                <div class="model-desc-box">
                    <div class="model-desc-title">Phù hợp khi:</div>
                    <div class="model-desc-text">
                        Gym muốn gia tăng giá trị thẻ tập, tạo điểm nhấn dịch vụ khác biệt và hấp dẫn trong khu vực.
                    </div>
                </div>

                <div class="model-specs">
                    <div class="model-spec-item"><i class="fas fa-check"></i> Tăng giá trị cảm nhận cho thẻ VIP</div>
                    <div class="model-spec-item"><i class="fas fa-check"></i> Giá ưu đãi đối tác theo khối lượng</div>
                    <div class="model-spec-item"><i class="fas fa-check"></i> Đòn bẩy chốt sale thẻ hội viên dài hạn</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION: HÀNH TRÌNH HỘI VIÊN 5 BƯỚC (Slide 10)
     ========================================================================== -->
<section class="journey-section" id="hanh-trinh">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-route"></i> QUY TRÌNH LIỀN MẠCH</span>
            <h2 class="section-title">Hành trình hội viên <span class="text-accent">5 bước rõ ràng</span></h2>
            <p class="section-subtitle">
                Mỗi bên có một đầu mối theo sát &bull; Hội viên luôn được tôn trọng và minh bạch trong mọi quyết định.
            </p>
        </div>

        <div class="journey-steps-grid">
            <div class="journey-step-card">
                <div class="step-number">01</div>
                <h3 class="step-title">Tìm hiểu</h3>
                <p class="step-desc">Nhận thông tin chương trình và đồng ý tự nguyện để được đội ngũ liên hệ tư vấn.</p>
                <span class="step-owner">Gym &amp; Gọn Khỏe</span>
            </div>

            <div class="journey-step-card">
                <div class="step-number">02</div>
                <h3 class="step-title">Đánh giá</h3>
                <p class="step-desc">Khám sàng lọc, xác định mục tiêu vóc dáng và hướng chăm sóc y khoa thích hợp.</p>
                <span class="step-owner">Gọn Khỏe tại cơ sở phù hợp</span>
            </div>

            <div class="journey-step-card">
                <div class="step-number">03</div>
                <h3 class="step-title">Lựa chọn</h3>
                <p class="step-desc">Xem phạm vi dịch vụ, chi phí từng phần rõ ràng và chủ động đưa ra quyết định tham gia.</p>
                <span class="step-owner">Hội viên quyết định</span>
            </div>

            <div class="journey-step-card">
                <div class="step-number">04</div>
                <h3 class="step-title">Thực hiện</h3>
                <p class="step-desc">Theo dõi chăm sóc y khoa, dinh dưỡng và đồng hành tập luyện kháng lực sát sao cùng PT.</p>
                <span class="step-owner">Gọn Khỏe cùng PT</span>
            </div>

            <div class="journey-step-card">
                <div class="step-number">05</div>
                <h3 class="step-title">Đánh giá lại</h3>
                <p class="step-desc">Đo lường tiến độ sau các mốc, ghi nhận kết quả và lựa chọn giai đoạn duy trì thói quen.</p>
                <span class="step-owner">Hội viên &amp; Đội phụ trách</span>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION: VẬN HÀNH & LỘ TRÌNH THỬ NGHIỆM (Slides 12, 15, 17)
     ========================================================================== -->
<section class="ops-section">
    <div class="container">
        <div class="ops-grid">
            <!-- Box 1: Phân công vận hành & Cơ chế thương mại (Slides 12 & 15) -->
            <div class="ops-box">
                <h3 class="ops-box-title">
                    <i class="fas fa-balance-scale"></i> Phân công vận hành &amp; Doanh thu
                </h3>
                <table class="ops-table">
                    <thead>
                        <tr>
                            <th style="width: 50%;">Gọn Khỏe by Qcare</th>
                            <th style="width: 50%;">Phòng Gym Đối Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cử đầu mối điều phối và đội chuyên môn y khoa.</td>
                            <td>Cử quản lý chi nhánh và PT phụ trách đầu mối.</td>
                        </tr>
                        <tr>
                            <td>Chuẩn bị tài liệu, đào tạo PT cách giới thiệu.</td>
                            <td>Bố trí lịch, vị trí và truyền thông đến hội viên.</td>
                        </tr>
                        <tr>
                            <td>Đánh giá y khoa, thực đơn dinh dưỡng và theo dõi.</td>
                            <td>Hướng dẫn tập luyện trong phạm vi chuyên môn thể hình.</td>
                        </tr>
                        <tr>
                            <td>Thu phí chăm sóc y khoa (báo giá minh bạch, tự nguyện).</td>
                            <td>Thu trọn vẹn doanh thu tập luyện và phí gói PT theo bảng giá Gym.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Box 2: Lộ trình thử nghiệm 1 chi nhánh (Slide 17) -->
            <div class="ops-box">
                <h3 class="ops-box-title">
                    <i class="fas fa-clock-rotate-left"></i> Đề xuất thử nghiệm tại 1 chi nhánh
                </h3>
                <div class="timeline-list">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-phase">GIAI ĐOẠN 1 (2 TUẦN)</div>
                        <div class="timeline-title">Chuẩn bị &amp; Đào tạo</div>
                        <div class="timeline-desc">
                            Khảo sát nhu cầu hội viên, chốt phạm vi và ngân sách, thống nhất bảo mật dữ liệu, hướng dẫn kỹ năng cho đội ngũ PT.
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-phase">GIAI ĐOẠN 2 (30 NGÀY ĐẦU)</div>
                        <div class="timeline-title">Triển khai &amp; Điều chỉnh</div>
                        <div class="timeline-desc">
                            Tổ chức hoạt động theo buổi, theo dõi lượng đặt hẹn và đo lường trải nghiệm thực tế, rà soát sớm để hoàn thiện quy trình.
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-phase">GIAI ĐOẠN 3 (KẾT THÚC 12 TUẦN)</div>
                        <div class="timeline-title">Đánh giá &amp; Nhân rộng</div>
                        <div class="timeline-desc">
                            Đánh giá số lượt sử dụng, doanh thu PT tăng thêm thực thu và mức độ hài lòng của hội viên để quyết định mở rộng toàn chuỗi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION: FAQS (Slide 19)
     ========================================================================== -->
<section class="faq-section" id="faqs">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-circle-question"></i> GIẢI ĐÁP BĂN KHOĂN</span>
            <h2 class="section-title">Những câu hỏi <span class="text-accent">thường gặp</span></h2>
            <p class="section-subtitle">
                Các nguyên tắc minh bạch giúp ban giám đốc phòng Gym và đội ngũ PT an tâm phối hợp rõ ràng, tin cậy.
            </p>
        </div>

        <div class="faq-container">
            <div class="faq-item active">
                <button type="button" class="faq-question">
                    <span>Mọi hội viên tham gia có bắt buộc phải dùng thuốc giảm cân không?</span>
                    <span class="faq-icon-arrow"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <strong>Không.</strong> Bác sĩ chuyên khoa sẽ đánh giá riêng biệt theo tình trạng lâm sàng của từng người. Việc sử dụng thuốc (nếu phù hợp theo chỉ định y tế) luôn phải đi cùng kế hoạch dinh dưỡng khoa học và tập luyện thể lực chủ động, tuân thủ đúng hướng dẫn chuyên môn và không lạm dụng.
                </div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question">
                    <span>Phòng Gym có phải đầu tư kiosk hoặc cải tạo mặt bằng tốn kém ngay từ đầu không?</span>
                    <span class="faq-icon-arrow"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <strong>Không.</strong> Hai bên khởi đầu bằng Hình thức A (hoạt động theo buổi workshop linh hoạt) để kiểm chứng nhu cầu thực tế của hội viên trước khi cân nhắc thiết lập điểm tiếp nhận cố định (chỉ cần từ 2 &ndash; 4 m² gọn nhẹ).
                </div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question">
                    <span>Gọn Khỏe có thay thế vai trò của PT hoặc lấy dữ liệu hội viên của Gym không?</span>
                    <span class="faq-icon-arrow"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <strong>Không.</strong> PT tiếp tục phụ trách chuyên môn tập luyện và giữ vai trò trung tâm. Việc liên hệ và chia sẻ thông tin dựa trên sự đồng ý tự nguyện của hội viên theo đúng phạm vi thống nhất giữa hai bên.
                </div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question">
                    <span>Hội viên đăng ký tham gia chương trình muộn thì quyền lợi được tính như thế nào?</span>
                    <span class="faq-icon-arrow"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    Hội viên vào chương trình ở bất kỳ thời điểm nào đều được đảm bảo theo dõi và chăm sóc đầy đủ trọn vẹn toàn bộ thời hạn đã đăng ký (ví dụ đủ 12 tuần của chương trình Fit &amp; Lean).
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION: LỜI MỜI HỢP TÁC & FORM ĐĂNG KÝ (Slide 20)
     ========================================================================== -->
<section class="contact-section" id="form-hop-tac">
    <div class="container">
        <div class="contact-card-box">
            <div class="contact-layout">
                <!-- Info Column -->
                <div class="contact-info-col">
                    <span class="section-badge"><i class="fas fa-handshake"></i> LỜI MỜI HỢP TÁC</span>
                    <h3>Chọn một chi nhánh<br><span class="text-accent">Xây một chương trình phù hợp</span></h3>
                    <p>
                        Trân trọng mời Quý chủ Gym hoặc Quản lý chi nhánh tham gia buổi trao đổi 30 phút. Hai bên cùng xem xét nhu cầu hội viên, năng lực PT và phương án thử nghiệm phù hợp, hiệu quả.
                    </p>

                    <div class="contact-meta-list">
                        <div class="contact-meta-item">
                            <div class="contact-meta-icon"><i class="fas fa-building"></i></div>
                            <div>
                                <div class="contact-meta-label">Đầu mối phụ trách</div>
                                <div class="contact-meta-val">Bộ phận Phát triển đối tác Gọn Khỏe by Qcare</div>
                            </div>
                        </div>

                        <div class="contact-meta-item">
                            <div class="contact-meta-icon"><i class="fas fa-phone-volume"></i></div>
                            <div>
                                <div class="contact-meta-label">Hotline tư vấn hợp tác</div>
                                <div class="contact-meta-val">
                                    <a href="tel:0353538887">035.353.8887</a> (Hỗ trợ Zalo 24/7)
                                </div>
                            </div>
                        </div>

                        <div class="contact-meta-item">
                            <div class="contact-meta-icon"><i class="fas fa-envelope"></i></div>
                            <div>
                                <div class="contact-meta-label">Email liên hệ</div>
                                <div class="contact-meta-val">
                                    <a href="mailto:info@qcare.com.vn">info@qcare.com.vn</a>
                                </div>
                            </div>
                        </div>

                        <div class="contact-meta-item">
                            <div class="contact-meta-icon"><i class="fas fa-location-dot"></i></div>
                            <div>
                                <div class="contact-meta-label">Địa chỉ</div>
                                <div class="contact-meta-val">Số 1/05 Đường 0, Garden Court 2, Phường Tân Hưng, TP.HCM</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="contact-form-col">
                    <form class="partnership-form" id="partnershipForm">
                        <div class="form-row-2">
                            <div class="form-group">
                                <label for="formName">Họ và tên của bạn <span class="req">*</span></label>
                                <input type="text" id="formName" class="form-input" placeholder="Nguyễn Văn A" required>
                            </div>
                            <div class="form-group">
                                <label for="formPhone">Số điện thoại / Zalo <span class="req">*</span></label>
                                <input type="tel" id="formPhone" class="form-input" placeholder="0908 123 456" required>
                            </div>
                        </div>

                        <div class="form-row-2">
                            <div class="form-group">
                                <label for="formGym">Tên phòng Gym / Chuỗi Fitness <span class="req">*</span></label>
                                <input type="text" id="formGym" class="form-input" placeholder="Ví dụ: Fitness Club Quận 1" required>
                            </div>
                            <div class="form-group">
                                <label for="formLocation">Khu vực / Chi nhánh dự kiến</label>
                                <input type="text" id="formLocation" class="form-input" placeholder="TP.HCM / Hà Nội / Bình Dương...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="formModel">Hình thức hợp tác quan tâm</label>
                            <select id="formModel" class="form-select">
                                <option value="A">Hình thức A: Chương trình Workshop theo buổi (Đề xuất khởi đầu)</option>
                                <option value="B">Hình thức B: Điểm tiếp nhận Gọn Khỏe Express (2 - 4 m²)</option>
                                <option value="C">Hình thức C: Đưa vào quyền lợi gói Hội viên VIP</option>
                                <option value="all">Muốn trao đổi chi tiết cả 3 hình thức</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="formNote">Lời nhắn hoặc yêu cầu cụ thể</label>
                            <textarea id="formNote" class="form-textarea" rows="3" placeholder="Mong muốn tìm hiểu chi tiết về cơ chế cho PT và lịch trao đổi..."></textarea>
                        </div>

                        <button type="submit" class="btn-primary form-submit-btn">
                            <i class="fas fa-paper-plane"></i> Đăng ký buổi trao đổi 30 phút
                        </button>

                        <div class="form-alert-success" id="formSuccessAlert">
                            <i class="fas fa-circle-check"></i> Cảm ơn bạn! Thông tin đã được gửi đến Bộ phận Phát triển Đối tác Gọn Khỏe by Qcare. Chúng tôi sẽ liên hệ lại trong vòng 24 giờ.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     FOOTER
     ========================================================================== -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col-brand">
                <img src="<?php echo base_url(); ?>images/logo.png" alt="Gọn Khỏe by Qcare">
                <p class="footer-brand-desc">
                    Gọn Khỏe by Qcare &ndash; Trung tâm Cân nặng &amp; Sức khỏe Chuyển hóa. Đồng hành cùng hệ thống phòng Gym và PT kiến tạo giải pháp chăm sóc thể chất và vóc dáng toàn diện.
                </p>
                <div style="color: var(--accent-lime); font-weight: 700; font-size: 0.95rem;">
                    <i class="fas fa-phone-alt"></i> Hotline: 035.353.8887
                </div>
            </div>

            <div>
                <h4 class="footer-col-title">Về Gọn Khỏe</h4>
                <ul class="footer-links-list">
                    <li><a href="#ve-gon-khoe">Giới thiệu Qcare Health</a></li>
                    <li><a href="#dich-vu">Lộ trình 4 cấp độ</a></li>
                    <li><a href="#fit-and-lean">Gói Fit &amp; Lean 12 Tuần</a></li>
                    <li><a href="#hanh-trinh">Hành trình 5 bước</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-col-title">Hợp tác Gym</h4>
                <ul class="footer-links-list">
                    <li><a href="#gia-tri-gym">Lợi ích cho phòng Gym</a></li>
                    <li><a href="#revenue-calculator">Mô phỏng doanh thu PT</a></li>
                    <li><a href="#hinh-thuc-hop-tac">Ba hình thức triển khai</a></li>
                    <li><a href="#faqs">Câu hỏi thường gặp</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-col-title">Thông Tin Liên Hệ</h4>
                <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.6; margin-bottom: 10px;">
                    Địa chỉ: Số 1/05 Đường 0, Garden Court 2, Phường Tân Hưng, TP.HCM
                </p>
                <p style="color: var(--text-muted); font-size: 0.88rem; margin-bottom: 10px;">
                    Hotline: <a href="tel:0353538887" style="color: var(--accent-lime);">035.353.8887</a>
                </p>
                <p style="color: var(--text-muted); font-size: 0.88rem;">
                    Email: <a href="mailto:info@qcare.com.vn" style="color: var(--accent-lime);">info@qcare.com.vn</a>
                </p>
            </div>
        </div>

        <div class="footer-bottom" style="justify-content: center; text-align: center;">
            <div>
                &copy; 2026 Gọn Khoẻ by Qcare. Bản quyền được bảo hộ.
            </div>
        </div>
    </div>
</footer>

<!-- Quick Floating Contact Widget -->
<div class="floating-contact-widget">
    <button type="button" class="floating-contact-btn btn-scroll-top" id="scrollTopBtn" title="Cuộn lên đầu trang" aria-label="Cuộn lên đầu trang">
        <i class="fas fa-chevron-up"></i>
    </button>
    <a href="tel:0353538887" class="floating-contact-btn btn-hotline" title="Gọi hotline tư vấn" aria-label="Gọi hotline">
        <i class="fas fa-phone-alt"></i>
    </a>
    <a href="https://zalo.me/0353538887" target="_blank" rel="noopener noreferrer" class="floating-contact-btn btn-zalo" title="Chat Zalo đối tác" aria-label="Chat Zalo">
        <i class="fas fa-comment-dots"></i>
    </a>
</div>

<?php 
   $this->load->view('footer');
?>