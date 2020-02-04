<div class="d-flex justify-content-between align-items-center">
    <a href="<?php echo BASE_URL ?>" style="text-decoration: none">
        <div class="d-flex mt-3 align-items-center">
            <img src="https://svgur.com/i/HLt.svg" alt="logoBlog" class="logoBlog" style="height: 45px" />
            <h5 style="font-weight: bold; margin-left: 10px; color: #010116">Creative Blog</h5>
        </div>
    </a>
    <div class="d-flex mt-3 align-items-center">
        <?php if(isset($_SESSION["id"])): ?>
        <div class="btn-group">
            <button class="btn dropdown-toggle ml-1" style="font-weight: bold; color: #010116 type=" button"
                id="buttonMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION["user_name"]; ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="buttonMenu1">
                <?php if($_SESSION["admin"]): ?>
                <a class="dropdown-item" href="<?php echo BASE_URL . 'app/admin/dashboard.php' ?>">Dashboard</a>
                <?php endif; ?>
                <a class="dropdown-item" style="color: #0721FF" href="<?php echo BASE_URL . 'logout.php' ?>">
                    Signout
                </a>
            </div>
        </div>
        <?php else: ?>
        <a href="<?php echo BASE_URL . 'register.php' ?>"
            style="margin-left: 10px; text-decoration: none; text-decoration: none; color: #010116; font-weight: bold"">
                <span style=" color: #0721FF">
            Sign up
            </span>
        </a>
        <a href="<?php echo BASE_URL . 'login.php' ?>"
            style="margin-left: 10px; text-decoration: none; text-decoration: none; color: #010116; font-weight: bold"">
                <span>
                    Log in
                </span>
            </a>
        <?php endif; ?>
    </div>
</div>