# h5p-tricks

## CLI script

Dans le dossier ```admin/cli``` vous trouverez de quoi automatiser
l'installation et la mise à jour des modules du plugin H5P pour Moodle.

Il vous suffit de copier les fichiers dans le dossier ```admin/cli```
de votre installation Moodle puis d'exécuter le script :

```php admin/cli/h5p.php```

Si vous utilisez déjà un autre script CLI dont le lancement est automatisé,
vous n'avez qu'à y copier les lignes suivantes :

```php
require_once 'h5p.class.php';
$h5p = new h5p();
$h5p->updateAllModules();
```

### Personnaliser la liste des modules à installer ou mettre à jour

Rendez-vous dans le fichier **h5p.class.php** où il vous suffit de commenter les lignes correspondant aux modules que vous ne souhaitez pas traiter pendant le processus.

Par exemple, si vous ne souhaitez pas installer ou mettre à jour le plugin  **H5P.ArithmeticQuiz** :

```php
    private $modules = [
        1   => "H5P.Accordion",
        //2   => "H5P.ArithmeticQuiz",
        3   => "H5P.Chart",
        4   => "H5P.Collage",
```

### Installer des modules supplémentaires

Si vous posséder des fichier **h5p** contenant des modules manquants, il suffit de les déposer dans le dossier ```mod/hvp/packages``` pour que ces modules soient installer.

**Exemple** :

Vous souhaitez installer **H5P.MathDisplay** pour pouvoir utiliser les expressions mathématiques LaTeX dans vos activités interactives.
1. Téléchargez le dernier paquet disponible sur https://h5p.org/mathematical-expressions ;
2. Créez un dossier ```packages``` dans ```mod/hvp``` et placez-y le paquet ;
3. Lancez le script CLI ```php admin/cli/h5p.php```

> Si vous utilisez votre propre script, ajoutez-y les lignes suivantes :
>
> ```php
> require_once 'h5p.class.php';
> h5p::uploadPackages();
> ```
>
> 

## CRON job

À venir...

## API service

À venir...