<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "Niet gelukt de vertalingen leeg te maken.",
"Failed to delete the server configuration" => "Verwijderen serverconfiguratie mislukt",
"The configuration is valid and the connection could be established!" => "De configuratie is geldig en de verbinding is geslaagd!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "De configuratie is geldig, maar Bind mislukte. Controleer de serverinstellingen en inloggegevens.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "De configuratie is ongeldig. Controleer de ownCloud log voor meer details.",
"Deletion failed" => "Verwijderen mislukt",
"Take over settings from recent server configuration?" => "Overnemen instellingen van de recente serverconfiguratie?",
"Keep settings?" => "Instellingen bewaren?",
"Cannot add server configuration" => "Kon de serverconfiguratie niet toevoegen",
"mappings cleared" => "vertaaltabel leeggemaakt",
"Success" => "Succes",
"Error" => "Fout",
"Connection test succeeded" => "Verbindingstest geslaagd",
"Connection test failed" => "Verbindingstest mislukt",
"Do you really want to delete the current Server Configuration?" => "Wilt u werkelijk de huidige Serverconfiguratie verwijderen?",
"Confirm Deletion" => "Bevestig verwijderen",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>Waarschuwing:</b> De Apps user_ldap en user_webdavauth zijn incompatible. U kunt onverwacht gedrag ervaren. Vraag uw beheerder om een van beide apps de deactiveren.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Waarschuwing:</b> De PHP LDAP module is niet geïnstalleerd, het backend zal niet werken. Vraag uw systeembeheerder om de module te installeren.",
"Server configuration" => "Serverconfiguratie",
"Add Server Configuration" => "Toevoegen serverconfiguratie",
"Host" => "Host",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Je kunt het protocol weglaten, tenzij je SSL vereist. Start in dat geval met ldaps://",
"Base DN" => "Base DN",
"One Base DN per line" => "Een Base DN per regel",
"You can specify Base DN for users and groups in the Advanced tab" => "Je kunt het Base DN voor gebruikers en groepen specificeren in het tab Geavanceerd.",
"User DN" => "User DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "De DN van de client gebruiker waarmee de verbinding zal worden gemaakt, bijv. uid=agent,dc=example,dc=com. Voor anonieme toegang laat je het DN en het wachtwoord leeg.",
"Password" => "Wachtwoord",
"For anonymous access, leave DN and Password empty." => "Voor anonieme toegang, laat de DN en het wachtwoord leeg.",
"User Login Filter" => "Gebruikers Login Filter",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" => "Definiëert het toe te passen filter als er geprobeerd wordt in te loggen. %%uid vervangt de gebruikersnaam bij het inloggen. Bijvoorbeeld: \"uid=%%uid\"",
"User List Filter" => "Gebruikers Lijst Filter",
"Defines the filter to apply, when retrieving users (no placeholders). Example: \"objectClass=person\"" => "Definieert het toe te passen filter bij het ophalen van gebruikers (geen tijdelijke aanduidingen). Bijvoorbeeld: \"objectClass=person\"",
"Group Filter" => "Groep Filter",
"Defines the filter to apply, when retrieving groups (no placeholders). Example: \"objectClass=posixGroup\"" => "Definieert het toe te passen filter bij het ophalen van groepen (geen tijdelijke aanduidingen). Bijvoorbeeld: \"objectClass=posixGroup\"",
"Connection Settings" => "Verbindingsinstellingen",
"Configuration Active" => "Configuratie actief",
"When unchecked, this configuration will be skipped." => "Als dit niet is ingeschakeld wordt deze configuratie overgeslagen.",
"Port" => "Poort",
"Backup (Replica) Host" => "Backup (Replica) Host",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Opgeven optionele backup host. Het moet een replica van de hoofd LDAP/AD server.",
"Backup (Replica) Port" => "Backup (Replica) Poort",
"Disable Main Server" => "Deactiveren hoofdserver",
"Only connect to the replica server." => "Maak alleen een verbinding met de replica server.",
"Use TLS" => "Gebruik TLS",
"Do not use it additionally for LDAPS connections, it will fail." => "Gebruik het niet voor LDAPS verbindingen, dat gaat niet lukken.",
"Case insensitve LDAP server (Windows)" => "Niet-hoofdlettergevoelige LDAP server (Windows)",
"Turn off SSL certificate validation." => "Schakel SSL certificaat validatie uit.",
"Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." => "Niet aanbevolen, gebruik alleen om te testen! Als de connectie alleen werkt met deze optie, importeer dan het SSL-certificaat van de LDAP-server naar uw %s server.",
"Cache Time-To-Live" => "Cache time-to-live",
"in seconds. A change empties the cache." => "in seconden. Een verandering maakt de cache leeg.",
"Directory Settings" => "Mapinstellingen",
"User Display Name Field" => "Gebruikers Schermnaam Veld",
"The LDAP attribute to use to generate the user's display name." => "Het te gebruiken LDAP attribuut voor het genereren van de weergavenaam voor de gebruiker.",
"Base User Tree" => "Basis Gebruikers Structuur",
"One User Base DN per line" => "Een User Base DN per regel",
"User Search Attributes" => "Attributen voor gebruikerszoekopdrachten",
"Optional; one attribute per line" => "Optioneel; één attribuut per regel",
"Group Display Name Field" => "Groep Schermnaam Veld",
"The LDAP attribute to use to generate the groups's display name." => "Het te gebruiken LDAP attribuut voor het genereren van de weergavenaam voor de groepen.",
"Base Group Tree" => "Basis Groupen Structuur",
"One Group Base DN per line" => "Een Group Base DN per regel",
"Group Search Attributes" => "Attributen voor groepszoekopdrachten",
"Group-Member association" => "Groepslid associatie",
"Special Attributes" => "Speciale attributen",
"Quota Field" => "Quota veld",
"Quota Default" => "Quota standaard",
"in bytes" => "in bytes",
"Email Field" => "E-mailveld",
"User Home Folder Naming Rule" => "Gebruikers Home map naamgevingsregel",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Laat leeg voor de gebruikersnaam (standaard). Of, specificeer een LDAP/AD attribuut.",
"Internal Username" => "Interne gebruikersnaam",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "Standaard wordt de interne gebruikersnaam aangemaakt op basis van het UUID attribuut. Het zorgt ervoor dat de gebruikersnaam uniek is en dat tekens niet hoeven te worden geconverteerd. De interne gebruikersnaam heeft als beperking dat alleen deze tekens zijn toegestaan​​: [a-zA-Z0-9_.@- ]. Andere tekens worden vervangen door hun ASCII vertaling of gewoonweg weggelaten. Bij identieke namen wordt een nummer toegevoegd of verhoogd. De interne gebruikersnaam wordt gebruikt om een ​​gebruiker binnen het systeem te herkennen. Het is ook de standaardnaam voor de standaardmap van de gebruiker in ownCloud. Het is ook een vertaling voor externe URL's, bijvoorbeeld voor alle *DAV diensten. Met deze instelling kan het standaardgedrag worden overschreven. Om een soortgelijk gedrag te bereiken als van vóór ownCloud 5, voer het gebruikersweergavenaam attribuut in in het volgende veld. Laat het leeg voor standaard gedrag. Veranderingen worden alleen toegepast op gekoppelde (toegevoegde) LDAP-gebruikers.",
"Internal Username Attribute:" => "Interne gebruikersnaam attribuut:",
"Override UUID detection" => "Negeren UUID detectie",
"By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." => "Standaard herkent ownCloud het UUID-attribuut automatisch. Het UUID attribuut wordt gebruikt om LDAP-gebruikers en -groepen uniek te identificeren. Ook zal de interne gebruikersnaam worden aangemaakt op basis van het UUID, tenzij deze hierboven anders is aangegeven. U kunt de instelling overschrijven en zelf een waarde voor het attribuut opgeven. U moet ervoor zorgen dat het ingestelde attribuut kan worden opgehaald voor zowel gebruikers als groepen en dat het uniek is. Laat het leeg voor standaard gedrag. Veranderingen worden alleen doorgevoerd op nieuw gekoppelde (toegevoegde) LDAP-gebruikers en-groepen.",
"Username-LDAP User Mapping" => "Gebruikersnaam-LDAP gebruikers vertaling",
"Usernames are used to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found. The internal username is used all over. Clearing the mappings will have leftovers everywhere. Clearing the mappings is not configuration sensitive, it affects all LDAP configurations! Never clear the mappings in a production environment, only in a testing or experimental stage." => "ownCloud maakt gebruik van gebruikersnamen om (meta) data op te slaan en toe te wijzen. Om gebruikers uniek te identificeren, krijgt elke LDAP-gebruiker ook een interne gebruikersnaam. Dit vereist een koppeling van de ownCloud gebruikersnaam aan een ​​LDAP-gebruiker. De gecreëerde gebruikersnaam is gekoppeld aan de UUID van de LDAP-gebruiker. Aanvullend wordt ook de 'DN' gecached om het aantal LDAP-interacties te verminderen, maar dit wordt niet gebruikt voor identificatie. Als de DN verandert, zullen de veranderingen worden gevonden. De interne naam wordt overal gebruikt. Het wissen van de koppeling zal overal resten achterlaten. Het wissen van koppelingen is niet configuratiegevoelig, maar het raakt wel alle LDAP instellingen! Zorg ervoor dat deze koppelingen nooit in een productieomgeving gewist worden. Maak ze alleen leeg in een test- of ontwikkelomgeving.",
"Clear Username-LDAP User Mapping" => "Leegmaken Gebruikersnaam-LDAP gebruikers vertaling",
"Clear Groupname-LDAP Group Mapping" => "Leegmaken Groepsnaam-LDAP groep vertaling",
"Test Configuration" => "Test configuratie",
"Help" => "Help"
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
