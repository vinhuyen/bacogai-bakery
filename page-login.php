<?php get_header(); ?>
<style>
    <?php include 'dangky.css'; ?>
</style>
<main id="site-content">
    <div class="section-inner">

        <?php
        $home_url = get_home_url();
        if ( is_user_logged_in() ) {

            echo 'Bạn đã đăng nhập rồi. <a href="'.wp_logout_url($home_url).'">Đăng xuất</a> ?';

        } else {
            ?>
            <h1  class="title-signup">Đăng ký tài khoản</h1>
            <div class="fb-gg">
                <div>
                    <img src="https://bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"/>
                </div>
                <div>
                    <img src="https://bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"/>
                </div>
            </div>
            <div class="line-break">
                <span>hoặc</span>
            </div>
            <form id="hk-registerform" action="<?php echo get_home_url() . '/dang-ky'; ?>">
                <?php wp_nonce_field( 'form_register' ); ?>
                <div id="hk-message"></div>
                <p style="display:none" id="hk-success">
                    Đăng ký người dùng thành công. Nhấp vào <a href="/wordpress/login">đây</a> để đăng nhập.
                </p>
                <div class="form-signup">
                    <div class="username row">
                        <label for="username">Tên đăng nhập</label>
                        <p class="input">
                            <input  type="text" name="username" id="username" placeholder="Tên đăng nhập">
                        </p>
                    </div>
                    <div class="email row">
                        <label for="email">Email</label>
                        <p class="input">
                            <input  type="email" name="email" id="email" placeholder="Email">
                        </p>
                    </div>
                    <div class="row">
                        <label for="password">Password</label>
                        <p class="input">
                            <input  type="password" name="password" id="password" placeholder="Mật khẩu">
                        </p>
                    </div>
                    <div class="row">
                        <label for="repassword">Confirm Password</label>
                        <p class="input">
                            <input  type="password" name="repassword" id="repassword" placeholder="Xác nhận mật khẩu">
                        </p>
                    </div>
                    <p class="text-center mb-0" style="margin-top: 10px;">
                        <button class="form-submit" type="submit">Đăng ký</button>
                    <div style="text-align: center;">
                        <h4>Đăng nhập <span><a href="/wordpress/login">Tại đây</a></span></h4>
                    </div>
                    </p>
                </div>

            </form>

        <?php } ?>

    </div>
</main>

<?php get_footer(); ?>
