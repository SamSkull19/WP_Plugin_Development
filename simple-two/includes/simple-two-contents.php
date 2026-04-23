<div class="wrap">
    <h1><?php echo get_admin_page_title(); ?></h1>

    <div class="notice notice-success is-dismissible">
        <p>Welcome to <strong>Simple Two Plugin</strong> settings page!</p>
    </div>


    <div style="display:flex; gap:20px; margin-top:20px;">
        <div style="background:#fff; padding:20px; border-radius:8px; box-shadow:0 1px 3px rgba(0,0,0,0.1); flex:1;">
            <h2 style="margin-top:0; border-bottom:2px solid #2271b1; padding-bottom:10px; color:#2271b1;">
                📋 Plugin Info
            </h2>

            <table class="widefat striped">
                <tbody>
                    <tr>
                        <td><strong>Plugin Name</strong></td>
                        <td>Simple Two</td>
                    </tr>

                    <tr>
                        <td><strong>Version</strong></td>
                        <td>1.0.0</td>
                    </tr>

                    <tr>
                        <td><strong>Author</strong></td>
                        <td>Sifat Samin</td>
                    </tr>

                    <tr>
                        <td><strong>Status</strong></td>
                        <td><span style="color:green;">● Active</span></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div style="background:#fff; padding:20px; border-radius:8px; box-shadow:0 1px 3px rgba(0,0,0,0.1); flex:1;">
            <h2 style="margin-top:0; border-bottom:2px solid #2271b1; padding-bottom:10px; color:#2271b1;">
                📊 Site Stats
            </h2>
            <table class="widefat striped">
                <tbody>
                    <tr>
                        <td><strong>Total Posts</strong></td>
                        <td><?php echo wp_count_posts()->publish; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Total Pages</strong></td>
                        <td><?php echo wp_count_posts('page')->publish; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Total Users</strong></td>
                        <td><?php echo count_users()['total_users']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>WordPress Version</strong></td>
                        <td><?php echo get_bloginfo('version'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div style="background:#fff; padding:20px; border-radius:8px; box-shadow:0 1px 3px rgba(0,0,0,0.1); margin-top:20px;">
        <h2 style="margin-top:0; border-bottom:2px solid #2271b1; padding-bottom:10px; color:#2271b1;">
            ⚙️ Quick Settings
        </h2>

        <form method="post" action="options.php">
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="site_label">Site Label</label></th>
                    <td><input type="text" id="site_label" class="regular-text" placeholder="Enter site label" /></td>
                </tr>

                <tr>
                    <th scope="row"><label for="site_desc">Description</label></th>
                    <td><textarea id="site_desc" class="large-text" rows="3" placeholder="Enter description"></textarea></td>
                </tr>

                <tr>
                    <th scope="row">Enable Feature</th>
                    <td>
                        <label>
                            <input type="checkbox" value="1" />
                            Enable custom feature for this plugin
                        </label>
                    </td>
                </tr>
            </table>

            <?php submit_button('Save Settings'); ?>
        </form>
    </div>
</div>
