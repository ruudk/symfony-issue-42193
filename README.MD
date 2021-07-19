# Reproduce

* `composer install`
* `bin/console cache:clear`
* `cp var/cache/dev/App_KernelDevDebugContainer.xml before.xml`
* Open `config/services.yaml` and uncomment line 15 + 16
* `bin/console cache:clear`
* `cp var/cache/dev/App_KernelDevDebugContainer.xml after.xml`
* `diff before.xml after.xml`
```diff
72,74c72
<     <service id="App\Abc\Abc" class="App\Abc\Abc" autowire="true" autoconfigure="true">
<       <argument>true</argument>
<     </service>
---
>     <service id="App\Abc\Abc" class="App\Abc\Abc" autowire="true" autoconfigure="true"/>
86c84
<         <argument type="service" id=".service_locator.BWNQB1D.App\Controller\LuckyController"/>
---
>         <argument type="service" id=".service_locator.OEIRemd.App\Controller\LuckyController"/>
1296c1294
<     <service id=".service_locator.BWNQB1D" class="Symfony\Component\DependencyInjection\ServiceLocator">
---
>     <service id=".service_locator.OEIRemd" class="Symfony\Component\DependencyInjection\ServiceLocator">
1306c1304
<     <service id=".service_locator.BWNQB1D.App\Controller\LuckyController" class="Symfony\Component\DependencyInjection\ServiceLocator">
---
>     <service id=".service_locator.OEIRemd.App\Controller\LuckyController" class="Symfony\Component\DependencyInjection\ServiceLocator">
1310c1308
<       <factory service=".service_locator.BWNQB1D" method="withContext"/>
---
>       <factory service=".service_locator.OEIRemd" method="withContext"/>
1636c1634
<     <service id=".service_locator.BD6raFg" alias=".service_locator.BWNQB1D"/>
---
>     <service id=".service_locator.U8882hq" alias=".service_locator.OEIRemd"/>
```
