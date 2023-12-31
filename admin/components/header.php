
<header class="header">
    <div class="header__wrap d-flex flex-column">
        <div class="header__wrap-brand">
            <a href="./?redirector=admin" class="header__wrap-brand-name">
                Comics Toon
            </a>
        </div>
        <div class="header__wrap-slogan">
            "Choose your life with comic"
        </div>

        <div class="header__wrap-menu">
            <ul class="header__wrap-menu-list">
                <li class="header__wrap-menu-item">
                    <a href="./?redirector=admin&page=home"
                        class="header__wrap-menu-link <?= $page == 'home' ? 'active' : ''; ?>">Trang
                        chủ</a>
                </li>
                <li class="header__wrap-menu-item">
                    <a href="./?redirector=admin&page=comics"
                        class="header__wrap-menu-link <?= $page == 'comics' ? 'active' : ''; ?>">Truyện</a>
                </li>
                <li class="header__wrap-menu-item">
                    <a href="./?redirector=admin&page=chapters"
                        class="header__wrap-menu-link <?= $page == 'chapters' ? 'active' : ''; ?>">Tập</a>
                </li>
                <li class="header__wrap-menu-item">
                    <a href="./?redirector=admin&page=categories"
                        class="header__wrap-menu-link <?= $page == 'categories' ? 'active' : ''; ?>">Thể loại</a>
                </li>
            </ul>
        </div>

        <div class="header__wrap-footer mt-auto">
            <div class="header__wrap-footer-btn-list">
                <a href="#" class="btn btn-dark" title="Quản lý người dùng">
                    <i class="fa-solid fa-users"></i>
                </a>
                <a href="#" class="btn btn-dark" title="Cài đặt trang web">
                    <i class="fa-solid fa-gear"></i>
                </a>
            </div>
        </div>
    </div>
</header>