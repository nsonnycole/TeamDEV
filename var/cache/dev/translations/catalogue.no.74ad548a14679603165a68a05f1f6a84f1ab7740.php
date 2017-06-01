<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('no', array (
  'validators' => 
  array (
    'This value should be false.' => 'Verdien må være usann.',
    'This value should be true.' => 'Verdien må være sann.',
    'This value should be of type {{ type }}.' => 'Verdien skal ha typen {{ type }}.',
    'This value should be blank.' => 'Verdien skal være blank.',
    'The value you selected is not a valid choice.' => 'Den valgte verdien er ikke gyldig.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du må velge minst {{ limit }} valg.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan maks velge {{ limit }} valg.',
    'One or more of the given values is invalid.' => 'En eller flere av de oppgitte verdiene er ugyldige.',
    'This field was not expected.' => 'Dette feltet var ikke forventet.',
    'This field is missing.' => 'Dette feltet mangler.',
    'This value is not a valid date.' => 'Verdien er ikke en gyldig dato.',
    'This value is not a valid datetime.' => 'Verdien er ikke en gyldig dato/tid.',
    'This value is not a valid email address.' => 'Verdien er ikke en gyldig e-postadresse.',
    'The file could not be found.' => 'Filen kunne ikke finnes.',
    'The file is not readable.' => 'Filen er ikke lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor ({{ size }} {{ suffix }}). Tilatte maksimale størrelse {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mimetypen av filen er ugyldig ({{ type }}). Tilatte mimetyper er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Verdien må være {{ limit }} tegn lang eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Verdien er for lang. Den må ha {{ limit }} tegn eller mindre.',
    'This value should be {{ limit }} or more.' => 'Verdien må være {{ limit }} eller mer.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Verdien er for kort. Den må ha {{ limit }} tegn eller flere.',
    'This value should not be blank.' => 'Verdien kan ikke være blank.',
    'This value should not be null.' => 'Verdien kan ikke være tom (null).',
    'This value should be null.' => 'Verdien skal være tom (null).',
    'This value is not valid.' => 'Verdien er ugyldig.',
    'This value is not a valid time.' => 'Verdien er ikke en gyldig tid.',
    'This value is not a valid URL.' => 'Verdien er ikke en gyldig URL.',
    'The two values should be equal.' => 'Verdiene skal være identiske.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor. Den maksimale størrelsen er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen er for stor.',
    'The file could not be uploaded.' => 'Filen kunne ikke lastes opp.',
    'This value should be a valid number.' => 'Verdien skal være et gyldig tall.',
    'This file is not a valid image.' => 'Denne filen er ikke et gyldig bilde.',
    'This is not a valid IP address.' => 'Dette er ikke en gyldig IP adresse.',
    'This value is not a valid language.' => 'Verdien er ikke et gyldig språk.',
    'This value is not a valid locale.' => 'Verdien er ikke en gyldig lokalitet.',
    'This value is not a valid country.' => 'Verdien er ikke et gyldig navn på land.',
    'This value is already used.' => 'Verdien er allerede brukt.',
    'The size of the image could not be detected.' => 'Bildestørrelsen kunne ikke oppdages.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Bildebredden er for stor ({{ width }} piksler). Tillatt maksimumsbredde er {{ max_width }} piksler.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Bildebredden er for liten ({{ width }} piksler). Forventet minimumsbredde er {{ min_width }} piksler.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Bildehøyden er for stor ({{ height }} piksler). Tillatt maksimumshøyde er {{ max_height }} piksler.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Bildehøyden er for liten ({{ height }} piksler). Forventet minimumshøyde er {{ min_height }} piksler.',
    'This value should be the user\'s current password.' => 'Verdien skal være brukerens sitt nåværende passord.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Verdien skal være nøyaktig {{ limit }} tegn.',
    'The file was only partially uploaded.' => 'Filen var kun delvis opplastet.',
    'No file was uploaded.' => 'Ingen fil var lastet opp.',
    'No temporary folder was configured in php.ini.' => 'Den midlertidige mappen (tmp) er ikke konfigurert i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikke skrive midlertidig fil til disk.',
    'A PHP extension caused the upload to fail.' => 'En PHP-utvidelse forårsaket en feil under opplasting.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samlingen må inneholde {{ limit }} element eller flere.|Denne samlingen må inneholde {{ limit }} elementer eller flere.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samlingen må inneholde {{ limit }} element eller færre.|Denne samlingen må inneholde {{ limit }} elementer eller færre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samlingen må inneholde nøyaktig {{ limit }} element.|Denne samlingen må inneholde nøyaktig {{ limit }} elementer.',
    'Invalid card number.' => 'Ugyldig kortnummer.',
    'Unsupported card type or invalid card number.' => 'Korttypen er ikke støttet eller kortnummeret er ugyldig.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dette er ikke et gyldig IBAN-nummer.',
    'This value is not a valid ISBN-10.' => 'Verdien er ikke en gyldig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Verdien er ikke en gyldig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Verdien er hverken en gyldig ISBN-10 eller ISBN-13.',
    'This value is not a valid ISSN.' => 'Verdien er ikke en gyldig ISSN.',
    'This value is not a valid currency.' => 'Verdien er ikke gyldig valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Verdien skal være lik {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Verdien skal være større enn {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Verdien skal være større enn eller lik {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Verdien skal være identisk med {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Verdien skal være mindre enn {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Verdien skal være mindre enn eller lik {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Verdien skal ikke være lik {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Verdien skal ikke være identisk med {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Bildeforholdet er for stort ({{ ratio }}). Tillatt bildeforhold er maks {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Bildeforholdet er for lite ({{ ratio }}). Forventet bildeforhold er minst {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Bildet er en kvadrat ({{ width }}x{{ height }}px). Kvadratiske bilder er ikke tillatt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Bildet er i liggende retning ({{ width }}x{{ height }}px). Bilder i liggende retning er ikke tillatt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Bildet er i stående retning ({{ width }}x{{ height }}px). Bilder i stående retning er ikke tillatt.',
    'An empty file is not allowed.' => 'Tomme filer er ikke tilatt.',
    'The host could not be resolved.' => 'Vertsnavn kunne ikke løses.',
    'This value does not match the expected {{ charset }} charset.' => 'Verdien samsvarer ikke med forventet tegnsett {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dette er ikke en gyldig BIC.',
    'This form should not contain extra fields.' => 'Feltgruppen må ikke inneholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den opplastede filen var for stor. Vennligst last opp en mindre fil.',
    'The CSRF token is invalid.' => 'CSRF nøkkelen er ugyldig.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'En autentiseringsfeil har skjedd.',
    'Authentication credentials could not be found.' => 'Påloggingsinformasjonen kunne ikke bli funnet.',
    'Authentication request could not be processed due to a system problem.' => 'Autentiserings forespørselen kunne ikke bli prosessert grunnet en system feil.',
    'Invalid credentials.' => 'Ugyldig påloggingsinformasjonen.',
    'Cookie has already been used by someone else.' => 'Cookie har allerede blitt brukt av noen andre.',
    'Not privileged to request the resource.' => 'Ingen tilgang til å be om gitt ressurs.',
    'Invalid CSRF token.' => 'Ugyldig CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce er utløpt.',
    'No authentication provider found to support the authentication token.' => 'Ingen autentiserings tilbyder funnet som støtter gitt autentiserings token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen sesjon tilgjengelig, sesjonen er enten utløpt eller cookies ikke skrudd på.',
    'No token could be found.' => 'Ingen token kunne bli funnet.',
    'Username could not be found.' => 'Brukernavn kunne ikke bli funnet.',
    'Account has expired.' => 'Brukerkonto har utgått.',
    'Credentials have expired.' => 'Påloggingsinformasjon har utløpt.',
    'Account is disabled.' => 'Brukerkonto er deaktivert.',
    'Account is locked.' => 'Brukerkonto er sperret.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaine doit avoir exactement {{ limit }} caractère.|Cette chaine doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé.',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait.',
    'fos_user.username.short' => 'Le nom d\'utilisateur est trop court.',
    'fos_user.username.long' => 'Le nom d\'utilisateur est trop long.',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée.',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait.',
    'fos_user.email.short' => 'L\'adresse e-mail est trop courte.',
    'fos_user.email.long' => 'L\'adresse e-mail est trop longue.',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide.',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait.',
    'fos_user.password.short' => 'Le mot de passe est trop court.',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques.',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait.',
    'fos_user.new_password.short' => 'Le nouveau mot de passe est trop court.',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide.',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait.',
    'fos_user.group.short' => 'Le nom est trop court.',
    'fos_user.group.long' => 'Le nom est trop long.',
    'fos_group.name.already_used' => 'Le nom est déjà utilisé.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour.',
    'group.flash.created' => 'Le groupe a été créé.',
    'group.flash.deleted' => 'Le groupe a été supprimé.',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour.',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié.',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Créer un compte',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès.',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Ce lien ne peut être utilisé qu\'une seule fois pour valider votre compte.

Cordialement,
L\'équipe
',
    'resetting.check_email' => 'Un e-mail a été envoyé. Il contient un lien sur lequel il vous faudra cliquer pour réinitialiser votre mot de passe.
Remarque : Vous ne pouvez demander un nouveau mot de passe que toutes les %tokenLifetime% heures.

Si vous ne recevez pas un email, vérifiez votre dossier spam ou essayez à nouveau.
',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès.',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Répéter le mot de passe',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Répéter le nouveau mot de passe',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Créer "%entity_name%"',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => 'Modifier %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} Aucun résultat trouvé|{1} <strong>1</strong> résultat trouvé|]1,Inf] <strong>%count%</strong> résultats trouvés',
    'search.no_results' => 'Aucun résultat trouvé',
    'list.row_actions' => 'Actions',
    'paginator.first' => 'Premier',
    'paginator.previous' => 'Précédent',
    'paginator.next' => 'Suivant',
    'paginator.last' => 'Dernier',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> sur <strong>%results%</strong>',
    'label.true' => 'Oui',
    'label.false' => 'Non',
    'label.empty' => 'Vide',
    'label.null' => 'Aucun(e)',
    'label.nullable_field' => 'Laisser vide',
    'label.object' => 'Objet PHP',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Aucun accesseur n\'existe pour cette propriété ou celle-ci n\'est pas publique.',
    'user.logged_in_as' => 'Connecté en tant que',
    'user.unnamed' => 'Utilisateur sans nom',
    'user.anonymous' => 'Utilisateur anonyme',
    'user.signout' => 'Déconnexion',
    'toggle_navigation' => 'Activer ou désactiver la navigation',
    'delete_modal.title' => 'Voulez-vous supprimer cet élément ?',
    'delete_modal.content' => 'Cette action est irréversible.',
    'delete_modal.action' => 'Supprimer',
    'action.add_new_item' => 'Ajouter un nouvel élément',
    'action.add_another_item' => 'Ajouter un autre élément',
    'action.remove_item' => 'Supprimer l\'élément',
    'errors' => 'Erreur|Erreurs',
    'form.are_you_sure' => 'Vous n\'avez pas sauvegardé vos modifications.',
    'show.remaining_items' => '{1} il y a un autre élément qui n\'est pas affiché dans cette liste|]1,Inf] %count% autres éléments ne sont pas affichés dans cette liste',
  ),
  'messages' => 
  array (
    'action.new' => 'Créer %entity_name%',
    'action.show' => 'Voir',
    'action.edit' => 'Éditer',
    'action.search' => 'Rechercher',
    'action.delete' => 'Supprimer',
    'action.save' => 'Sauvegarder les modifications',
    'action.cancel' => 'Annuler',
    'action.list' => 'Retour à la liste',
    'label.form.empty_value' => 'Aucun(e)',
    '__name__label__' => '__name__label__',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
