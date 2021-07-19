# Reproduce

* `composer install`
* `bin/console cache:clear`
* `cp var/cache/dev/App_KernelDevDebugContainer.xml before.xml`
* Open `config/services.yaml` and uncomment line 12 + 13
* `bin/console cache:clear`
* `cp var/cache/dev/App_KernelDevDebugContainer.xml after.xml`
* `diff before.xml after.xml`
