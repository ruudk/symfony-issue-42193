# Reproduce

* `composer install`
* `bin/console cache:clear`
* `cp var/cache/dev/App_KernelDevDebugContainer.xml before.xml`
* Open `config/services.yaml` and uncomment line 15 + 16
* `bin/console cache:clear`
* `cp var/cache/dev/App_KernelDevDebugContainer.xml after.xml`
* `diff before.xml after.xml`
