# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  # VAGRANT BOX
  config.vm.box = "guillaumesadler/ubuntu-server-20.04"

  # VAGRANT SOFTWARE
  config.vm.provider "virtualbox" do |v|
    v.memory = 15000
    v.cpus = 8
  end

  # VAGRANT SOFTWARE
  config.vm.network "forwarded_port", guest: 8080, host: 8080 # JENKINS
  config.vm.network "forwarded_port", guest: 8001, host: 8001 # PRESTASHOP

  # PRIVATE NETWORK
  config.vm.network "private_network", ip: "192.168.33.10"

  # SYNCED FOLDERS
  config.vm.synced_folder "datas", "/home/vagrant/datas/"

  # PROVISIONNING
  config.vm.provision "shell", path: "vm_provision.sh"

end