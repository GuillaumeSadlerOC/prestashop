#!/bin/bash
sudo apt-get -y update
sudo apt-get -y upgrade

# VIM INSTALL (TEXT EDITOR)
sudo apt-get -y install vim zip unzip wget

# UFW
# sudo ufw allow OpenSSH
# sudo ufw enable
# sudo ufw allow 8088

# JAVA INSTALLATION
sudo apt-get update
sudo apt-get install --yes openjdk-11-jdk

# JENKINS INSTALLATION
# https://pkg.jenkins.io/debian-stable/
wget -q -O - https://pkg.jenkins.io/debian-stable/jenkins.io.key | sudo apt-key add -
sudo sh -c 'echo deb http://pkg.jenkins.io/debian-stable binary/ > /etc/apt/sources.list.d/jenkins.list'
sudo apt-get update
sudo apt-get install -y jenkins

# Install Docker
sudo apt -y remove docker docker-engine docker.io containerd runc
sudo apt -y update
sudo apt -y install \
    apt-transport-https \
    ca-certificates \
    curl \
    gnupg-agent \
    software-properties-common
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
   $(lsb_release -cs) \
   stable"

sudo apt -y update
sudo apt -y install docker-ce docker-ce-cli containerd.io

# Install Docker Compose 
sudo curl -L "https://github.com/docker/compose/releases/download/1.26.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose

# Adding user vagrant to docker group
usermod -aG docker vagrant

# Install NFS requirements
sudo apt install nfs-common portmap

# Docker compose
sudo docker-compose -f /home/vagrant/datas/prestashop/docker-compose.yml up -d --build
