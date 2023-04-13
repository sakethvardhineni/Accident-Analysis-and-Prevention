# OSSEC Setup On Ubuntu 
Reference: https://www.rapid7.com/blog/post/2017/06/30/how-to-install-and-configure-ossec-on-ubuntu-linux/  
Latest versions: https://github.com/ossec/ossec-hids/branches/all  

### To Fix: Build fails because of missing pcre2-10.32  
I was able to update from ossec 2.9.x to 3.3.0 on ubuntu 18.04 -- the two new packages I had to install were libpcre2-dev and zlib1g-dev. Specifically, this is what worked for me:
```
sudo apt install libpcre2-dev zlib1g-dev  
sudo PCRE2_SYSTEM=yes ./install.sh  
```
https://github.com/ossec/ossec-hids/issues/1663  

### To fix: fatal error: openssl/opensslv.h: No such file or directory  
To fix this problem, you have to install OpenSSL development package, which is available in standard repositories of all modern Linux distributions.  

To install OpenSSL development package on Debian, Ubuntu or their derivatives:  
```
$ sudo apt-get install libssl-dev.  
```

To install OpenSSL development package on Fedora, CentOS or RHEL:  
```
$ sudo yum install openssl-devel  
```
Edit : As @isapir has pointed out, for Fedora version>=22 use the DNF package manager :
```
dnf install openssl-devel. 
```