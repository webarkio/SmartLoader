# SmartLoader
WordPress plugin for control dependency

Plugin features
1. Load all modules in theme or in plugin or in plugin modules dir
2. Order should be respected
3. Module with same name should be skipped, but submodules should be added to modules list
4. Module can be loaded before "Loader" inited. In this case it should be included again later
5. No "eval" function should be used

