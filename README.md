# h5p-tricks

## CLI script

Dans le dossier *admin/cli* vous trouverez de quoi automatiser
l'installation et la mise à jour des modules du plugin H5P pour Moodle.

Il vous suffit de copier les fichiers dans le dossier *admin/cli*
de votre installation Moodle puis d'exécuter le script :

```php admin/cli/h5p.php```

Si vous utilisez déjà un autre script CLI dont le lancement est automatisé,
vous n'avez qu'à y copier les lignes suivantes :

```php
require 'h5p.class.php';
$h5p = new h5p();
$h5p->updateAllModules();
```

## CRON job

À venir...

## API service

À venir...