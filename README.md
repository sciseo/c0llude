c0llude
=======

c0llude is a self-hosted, flat-file collaboration tool for small teams and activists. Your data belongs to you and your team, not government lawyers and spies. So we built c0llude with privacy from the ground up, under the following principles:

**Open Source**  
> Anyone can view and examine every line of our source code. You'll find that our software never tracks your activity, never phones home, and simply "does what it says on the box".

**Self Hosted**  
> Never trust another third-party platform with your data. Host unlimited instances of c0llude on any web server with PHP support, even your own web server at home.

**Flat File**  
> Databases are messy, and make backups annoying, even challenging. So we didn't use one. All user data is stored in flat files, which can be copied and migrated in a flash.

**Long-Term Support**  
> We believe in supporting our community by maintaining our software and responding quickly to our users. We'll offer long-term support to anyone who asks for it.

**Revolutionary Inbox**  
> Email is 1970's technology, it's unencrypted, and it's easily tracked by government agencies and malicious actors. So we built a flat-file inbox which keeps your messages private.

# Quick Install

On a PHP-capable web server, cd into the directory you want to install and run,
```
git clone https://github.com/neflabs/c0llude
chmod -R 770 c0llude
```

Edit `/settings/site_name.txt` and `/settings/site_url.txt`

# Access

Be sure to set a password in the directory.
