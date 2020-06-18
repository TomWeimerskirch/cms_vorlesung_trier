.. include:: Includes.txt

Installation
--------------

First downloaded and unpacked a full TYPO3 core.
In the last installation step you can select the option "Yes, download the list of distributions."
On your first backend login you will be redirected to the extension manager 
"Get preconfigured distribution" where you can install the "Beispielprojekt CMS Vorlesung" with one click.

Note the extension can be unloaded and removed from the system after initial import,
but do not forget to remove the code of the cms_vorlesung_trier which loaded required content data into the database and
required files into fileadmin/cms_vorlesung_trier upon first installation.


Removal
-------

To remove the package from the instance, the following steps are needed:

* Unload extensions "cms_vorlesung_trier"

* Delete the extension in the extension manager

* Remove the page tree

* Remove all files from fileadmin/cms_vorlesung_trier using the backend Filelist module