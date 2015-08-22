<?php
/**
*
* Images from posts extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 Anvar <http://bb3.mobi>
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_IMG_FROM_POSTS'			=> 'Images des messages',
	'ACP_IMG_MANAGE_POSTS'			=> 'Gestion des miniatures',
	'ACP_IMG_MANAGE_POSTS_EXPLAIN'	=> 'Supprime toutes les miniatures ou celles inutilisées et configure la suppression automatique du cache des miniatures.',
	'ACP_IMG_POSTS'					=> 'Paramètres d’affichage',
	'ACP_IMG_POSTS_DESCRIPTION'		=> 'Personnalise l’affichage les images des messages du forum.',
	'ACP_IMG_POSTS_EXPLAIN'			=> 'Permet de configurer les paramètres d’affichage des images.<br />Extension <a href="http://bb3.mobi">Img from Posts</a> par (c) <a href="http://apwa.ru">Anvar</a>',
	'CLEAR_ALL'						=> 'Supprimer toutes les miniatures',
	'CLEAR_ALL_EMPTY'				=> 'Le cache des miniatures est vide',
	'CLEAR_ALL_ERROR'				=> 'Impossible de purger le cache des miniatures (le répertoire des miniatures pourrait ne pas exister)',
	'CLEAR_ALL_SUCCESS'				=> 'Le cache des miniatures a été purgé avec succès',
	'CLEAR_CACHE'					=> 'Purger la cache des miniatures',
	'CLEAR_CACHE_BY_CRON'			=> 'Utiliser le Cron pour supprimer automatiquement les miniatures',
	'CLEAR_OLD'						=> 'Supprimer les miniatures inutilisées',
	'CLEAR_OLD_ERROR'				=> 'Échec de suppression des miniatures inutilisées',
	'CLEAR_OLD_SUCCESS'				=> 'Les miniatures inutilisées ont été supprimées avec succès',
	'CREATE_THUMBS'					=> 'Vérification et création des miniatures',
	'CRON_PRUNE'					=> 'Fréquence de la suppression automatique',
	'CRON_SET'						=> 'Activer la suppression automatique des miniatures',
	'FIRST_IMAGES_FLOAT'			=> 'Afficher les miniatures sur la gauche',
	'FIRST_IMAGES_TOPIC'			=> 'Afficher sur la liste des sujets',
	'FIRST_IMAGES_TOPIC_ON'			=> 'Permet d’activer les images sur la page de la liste des sujets.',
	'FORUMS_EXPLAIN'				=> 'Sélectionner un forum pour lequel des miniatures seront créées',
	'IMAGES_ATACHMENT'				=> 'Type d’images',
	'IMAGES_ATACHMENT_EXPLAIN'		=> 'Pour afficher les miniatures pour les fichiers joints, sélectionner « Fichiers joints ». Pour afficher les miniatures pour les images des messages mises entre les balises du BBCode [IMG], sélectionner « [IMG] Images ». Pour afficher les deux types de miniatures, sélectionner « Toutes » <span class="error">(non recommandé, cela risque d’accroitre considérablement le chargement de la page)</span>.',
	'IMAGES_ATTACHMENT_ALL'			=> 'Images des autres forums',
	'IMAGES_ATTACHMENT_ALL_EXPLAIN'	=> 'Permet d’afficher des images d’autres forums sur ce forum.',
	'IMAGES_BOTTOM_TYPE'			=> 'Afficher en bas de la page de l’index du forum',
	'IMAGES_CAROUSEL_TYPE'			=> 'Défilement des images',
	'IMAGES_CAROUSEL_TYPE_EXPLAIN'	=> 'Permet de faire défiler les images en cliquant sur les boutons appropriés.',
	'IMAGES_COUNT_IMG'				=> 'Maximum d’images',
	'IMAGES_COUNT_IMG_EXPLAIN'		=> 'Nombre maximum d’images dans le bloc.',
	'IMAGES_COUNT_IMG_MIN'			=> 'Minimum d’images',
	'IMAGES_COUNT_IMG_MIN_EXPLAIN'	=> 'Nombre minimum d’images à afficher.',
	'IMAGES_HEIGHT_WIDTH'			=> 'Créer des miniatures carrées',
	'IMAGES_HEIGHT_WIDTH_EXPLAIN'	=> 'Si activé, les miniatures seront tronquées à gauche et à droite ou en haut et en bas, dans le cas contraire elles seront affichées en proportion de l’image réduite.',
	'IMAGES_IGNORE_FORUM'			=> 'Forums ignorés',
	'IMAGES_IGNORE_TOPIC'			=> 'Sujets ignorés',
	'IMAGES_IGNORE_TOPIC_EXPLAIN'	=> 'Permet de saisir les ID des sujets à exclure de l’affichage, en les séparant par une virgule.',
	'IMAGES_MODE_ALL'				=> 'Toutes',
	'IMAGES_MODE_ATT'				=> 'Fichiers joints',
	'IMAGES_MODE_IMG'				=> '[IMG] Images',
	'IMAGES_NEW_PATH'				=> 'Chemin du stockage des miniatures',
	'IMAGES_NEW_PATH_EXPLAIN'		=> '<span class="error">Il est nécessaire d’appliquer des permissions sur le répertoire des miniatures via la commande CHMOD : 777.</span>',
	'IMAGES_PHPBB_GALLERY'			=> 'Images de la Galerie',
	'IMAGES_PHPBB_GALLERY_EXPLAIN'	=> 'Si activé, les images de l’extension phpBB Gallery seront seront disponibles en miniatures. <a href="https://www.phpbb.com/community/viewtopic.php?f=456&t=2273501">&laquo;phpBB Gallery 3.1 Extension&raquo;</a><br />Ceci est optionnel et n’est pas requis pour l’installation.',
	'IMAGES_PLACE_TYPE'				=> 'Emplacement de l’affichage',
	'IMAGES_PLACE_TYPE_ALL'			=> 'Les deux',
	'IMAGES_PLACE_TYPE_INDEX'		=> 'Sur la page de l’index du forum',
	'IMAGES_PLACE_TYPE_OFF'			=> 'Désactiver',
	'IMAGES_PLACE_TYPE_VIEW'		=> 'Sur la page de la liste des sujets',
	'IMAGES_SETTINGS'				=> 'Paramètres des miniatures',
	'IMAGES_SIZE_IMG'				=> 'Largeur maximale de l’image',
	'IMAGES_TOP_INVERT'				=> 'Afficher en haut de la page de l’index du forum',
	'IMAGES_TOP_INVERT_EXPLAIN'		=> 'Permet d’afficher le bloc des miniatures en haut de la page de l’index du forum.',
	'LAST_IMAGES_ATACHMENT'			=> 'Dernière images en fichiers joints',
	'LOG_CLEAR_IMG_CACHE'			=> 'Le cache des miniatures des <strong>images des messages</strong> a été purgé',
	'LOG_IMG_FROM_POSTS_CONFIG'		=> 'Les paramètres des <strong>images des messages</strong> ont été appliqués',
	'NOT_FORUM_SELECTED'			=> 'Un forum doit être sélectionner, Merci de recommencer.',
	'NO_IMAGES_TO DELETE'			=> 'Des miniatures abandonnées ou inutilisées ont été trouvées',
	'NUM_THUMBS'					=> 'Le nombre de messages est en cours de traitement',
	'NUM_THUMBS_EXPLAIN'			=> 'Sélectionner le nombre de messages désirés',
	'THUMB_CREATED'					=> '<strong>Nombre de miniatures vérifiées : %d et créées : %d.</strong><br />Les miniatures suivantes ont été créées<br />%s.',
	'THUMB_NOT_NEED_CREATE'			=> '<strong>Nombre de miniatures vérifiées : %d</strong>. Des miniatures en attente de création n’ont pas été trouvées.',
	'WATERMARKS'					=> '&laquo;Filigranes&raquo;',
	'WATERMARKS_EXPLAIN'			=> 'Saisir le texte qui sera affiché en filigrane, ou laisser vide si le filigrane n’est pas nécessaire.',
));
