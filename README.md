# PHP Image Uploader 

This is a simple and lightweight image uploader written in PHP.

The PHP script saves an image from a `POST`-Request to a folder and sends you the URL to access the image when being called.

All images/files can embed in applications such as Discord/WhatsApp.

# Setup

1. Copy the upload.php file and upload it to your web server (e.g. `/var/www/website/upload.php`).

2. Customize the script:

    - Line 3: Exchange `YOUR_UPLOAD_SECRET` with your upload secret (for example random generated string e.g. of 20 characters).
  
    - Line 4: Exchange `UPLOAD_DOMAIN` with the domain of the upload script (e.g. `http://yourdomain.com/upload.php`)
  
    - Line 5: Optional: Add a redirect URL, that you get redirected to, in case someone calls the website without an image uploader: Exchange `REDIRECT_URL` with this URL.
  
  
3. Download the [`ShareX.sxcu`](https://github.com/KonVision/custom_image_uploader/blob/main/sharex.sxcu)-File (if you want to use [ShareX](https://getsharex.com)) or the [`ShareNix.json`](https://github.com/KonVision/custom_image_uploader/blob/main/sharenix.json)-File (if you want to use [ShareNix](https://github.com/Francesco149/sharenix)) from the repository, and customize the custom uploader settings to fit your configuration of the [`upload.php`](https://github.com/KonVision/custom_image_uploader/blob/main/upload.php)-Script.

    Do the following changes whether what tool you are using:
    - ShareX
        - `k` = Upload secret
        - `Request URL` = API URL (e.g. `http://yourdomain.com/upload.php`)
        - Optional: `d` = file name **(Optional!)**
    - ShareNix
        - `key` = Upload secret
        - `RequestURL` = API URL (e.g. `http://yourdomain.com/upload.php`)
        - `FileFormName` = file name **(Optional!)**
    Run the file after saving your changes.

> If you want to learn more about the configuration files and how to generate them, [this might interest you](https://github.com/KonVision/configuration-file-generators).
  
4. Upload images by using ShareX or ShareNix!


# Troubleshooting

Some errors you may encounter:
 
### `Error 404`

> Make sure you call the PHP script, and not some other website.

> Make sure your Apache/Nginx server is running.
  
### `Sorry, your file could not be uploaded.`

> Make sure you have PHP 7.4 installed & that the service is running (`systemctl status php7.4-fpm`).
  
> Make sure your PHP script has permissions to create files (`sudo chown -R www-data:www-data /var/www`)`
