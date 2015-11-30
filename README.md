# SmartLoader
WordPress plugin for control dependency

##Plugin features

1. Load all modules in theme or in plugin or in plugin modules dir
2. Order should be respected
3. Module with same name should be skipped, but submodules should be added to modules list
4. Module can be loaded before "SmartLoader" inited. In this case it should be included again later
5. No ```eval``` function should be used

##Usage
For start using ```SmartLoader``` do next:

1. Create directory structure
2. Add ```SmartLoader.class.php``` to your includes directory
3. Add ```index.php``` to root directory of your plugin
4. Edit ```index.php```
```php
...
    //Module name
    $module = "Plugin1";
    //Load after module
    $dependency = "SmartLoader";
    //Submodules dir
    $submodulesDirectory = realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "modules");
    //Includes dir
    $includesDirectory = realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "includes");
...
```

##Directory structure 
You can change it in ```index.php```

```
plugin\includes
plugin\includes\SmartLoader.class.php
plugin\modules
plugin\index.php
```
