<div id="logo-group">
    <span><img style="vertical-align:top; padding: 8px" width="80"
               src="<?= Swoole::$php->config['common']['logo_url'] ?>"/></span>
    <span id="logo" style="margin-left: 0px; width: 120px;"><strong
            style="font-size: 18px;"><?= Swoole::$php->config['common']['site_name'] ?></strong></span>
</div>
<div id="project-context">
    <span class="label">当前项目：</span>
        <span id="project-selector" class="popover-trigger-element dropdown-toggle" data-toggle="dropdown">
            <?= $_project_info['name'] ?> <i class="fa fa-angle-down"></i></span>
    <ul class="dropdown-menu">
        <?php foreach ($_projects as $p): ?>
            <li <?php if ($p['id'] == $_project_id)
            {
                echo "class='active'";
            } ?>>
                <a href="/stats/index/?project=<?= $p['id'] ?>"><?= $p['name'] ?></a>
            </li>
        <?php endforeach; ?>
        <!--            <li class="divider"></li>-->
        <!--            <li>-->
        <!--                <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>-->
        <!--            </li>-->
    </ul>
</div>
<div class="pull-right" style="padding: 15px;">
            <span style="font-weight: bolder">
        <span style="text-transform: none;">
                    <a style="text-decoration: none" href="/user/edit"><?= $this->userinfo['realname'] ?>
                        (<?= $this->userinfo['username'] ?>)
        </span>
        <span style="text-transform: none;padding: 15px 5px;">
                    <a style="text-decoration: none;font-weight: bolder" href="/page/logout/">退出</a>
        </span>
    </span>
</div>