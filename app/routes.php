<?php

	$w_routes = array(


		//-- Start : Pages générales --//
		['GET', '/', 'General#home', 'home'], // Index.php

        ['GET', '/account', 'General#account', 'account'], // Page pour les champs de connexion et d'inscription
		['POST', '/login', 'General#login', 'login'], // Route vers le traitement de connexion
		['GET', '/logout', 'General#logout', 'logout'], // Route vers le traitement de déconnexion
        ['POST', '/register', 'General#register', 'register'], // Route ver le traitement d'inscription

		['GET|POST', '/latlng', 'General#latlng', 'latlng'], // Route pour donner des coordonnées latitude et longitude pour afficher les producteurs sur google map

		['GET', '/mag', 'General#mag', 'mag'], // Page qui affiche des articles
		['GET', '/mag/article', 'General#article', 'article'], // Page qui affiche des articles --> Accès disponible lorsqu'on est admin
		['GET', '/mag/article/edit', 'General#article_edit', 'article_edit'], // Page qui affiche des articles --> Accès disponible lorsqu'on est admin
		['GET', '/mag/article/add', 'General#article_add', 'article_add'], // Page qui affiche des articles --> Accès disponible lorsqu'on est admin

		['GET', '/about', 'General#about', 'about'], // Page d'a propos
		['GET|POST', '/contact', 'General#contact', 'contact'], // Page du contact le site web
		['GET', '/sitemap', 'General#sitemap', 'sitemap'], // Page du Plan du site
		['GET', '/legal_notice', 'General#legal_notice', 'legal_notice'], // Page de la mention légale
		//-- End : Pages générales --//

		//-- Start : Pages Dashboard --//
		['GET', '/dashboard', 'Dashboard#dashboard', 'dashboard'], // Accueil de dashboard lorsqu'un utilisateur est loggué
		['GET', '/dashboard/wishlist', 'Dashboard#wishlist', 'wishlist'], // Page des favoris que l'utilisateur ont sauvegardé
		['GET', '/dashboard/wishlist/[a:id]', 'Dashboard#wishlist_thread', 'wishlist_thread'], // detail d'un favori


		/* Trouver un produit */
		['GET', '/dashboard/find_product', 'Dashboard#find_product', 'find_product'],

		/* Trouver un producteur */
		['GET', '/dashboard/find_winemaker', 'Dashboard#find_winemaker', 'find_winemaker'],

		/* Inbox */
		['GET', '/dashboard/inbox', 'Dashboard#inbox', 'inbox'], // Liste des fils des communications entre un utilisateur et un autre
		['GET', '/dashboard/inbox/[a:id]', 'Dashboard#inbox_thread', 'inbox_thread'], // Détails d'un fil de communication
		['POST', '/dashboard/inbox/[a:id]', 'Dashboard#inbox_posting', 'inbox_posting'], // Envoyer un nouveau message

		/* Gestion des produits par producteur */
		['GET|POST', '/dashboard/newWineMaker', 'Dashboard#newWineMaker', 'newWineMaker'], // Création d'un nouveau producteur
		['GET|POST', '/dashboard/cave', 'Dashboard#cave', 'cave'], // Affichage & gestion des produits d'un producteur
		['GET|POST', '/dashboard/cave/edit/[a:id]', 'Dashboard#cave_edit', 'cave_edit'], // Affichage & gestion des produits d'un producteur

		/* Gestion des membres & producteurs pour Admin */
		['GET', '/dashboard/members', 'Dashboard#members', 'members'], // Liste des producteurs et gestions de ces producteurs par admin
		['POST', '/dashboard/members', 'Dashboard#addMember', 'members3'], // Ajouter un membre par admin
		['GET', '/dashboard/members/[a:id]', 'Dashboard#members_edit', 'members2'], // Liste des producteurs et gestions de ces producteurs par admin
		['GET', '/dashboard/winemakers', 'Dashboard#winemakers', 'winemakers'], // Liste des producteurs et gestions de ces producteurs par admin
		['GET', '/dashboard/winemakers/[a:id]', 'Dashboard#winemakers_edit', 'winemakers2'], // Liste des producteurs et gestions de ces producteurs par admin

		/* des profils des utilisateurs */
		['GET', '/dashboard/profile_view/[a:id]', 'Dashboard#profile_view', 'profile_view'], // Consulter un profil
		['GET', '/dashboard/profile_config/config', 'Dashboard#profile_conig', 'profile_config'], // Page des coordonnées de l'utilisateur
		//-- End : Pages Dashboard --//



	);
