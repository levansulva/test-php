#!/bin/sh
# SCRIPT: install.sh
# PURPOSE: Install the infection_scanner plugin into cPanel
# AUTHOR: Peter Elsner <peter.elsner@cpanel.net>
#

echo "Installing test php"

# Create the directory for the plugin

# Get the plugin files from Github
curl -s is_files.tar.gz > /usr/local/cpanel/base/frontend/paper_lantern/satestoPHP/is_files.tar.gz

# Uncompress the archive
tar xzf is_files.tar.gz

# Move files to /usr/local/cpanel/base/frontend/paper_lantern/infection_scanner directory
mv test.php /usr/local/cpanel/base/frontend/paper_lantern/satestoPHP
mv test-php.tar.gz /usr/local/cpanel/base/frontend/paper_lantern/satestoPHP

# Install the plugin (which also places the png image in the proper location)
/usr/local/cpanel/scripts/install_plugin /usr/local/cpanel/base/frontend/paper_lantern/satestoPHP/test-php.tar.gz

echo "Installation is complete!"

