<?php

return [
    'create'                            => [
        'description'           => 'Vytvořit nové tažení',
        'helper'                => [
            'title'     => 'Vítej v :name',
            'welcome'   => <<<'TEXT'
Než budeme pokračovat, je třeba zvolit název tažení, který odpovídá prostředí a situaci tvého světa. Pokud zatím vhodný název nemáš, nevadí. Později je možné jej změnit nebo vytvořit další tažení.

Děkujeme, že jsi se rozhodl pro systém Kanka a vítáme tě do naší rostoucí komunity.
TEXT
,
        ],
        'success'               => 'Vytvořeno tažení',
        'success_first_time'    => 'Nové tažení je připraveno. Protože jde o tvé první tažení, přidali jsme do něj několik objektů, které ti pomohou v začátcích a poskytnou určitou inspiraci, jak systém používat.',
        'title'                 => 'Vytvořit nové tažení',
    ],
    'destroy'                           => [
        'action'    => 'Odstranit tažení',
        'helper'    => 'Tažení lze odstranit pouze pokud zůstáváš jeho jediným členem.',
        'success'   => 'Tažení odstraněno',
    ],
    'edit'                              => [
        'description'   => 'Upravit tažení',
        'success'       => 'Tažení upraveno',
        'title'         => 'Upravit tažení :campaign',
    ],
    'entity_note_visibility'            => [
        'pinned'    => 'Připnout nové poznámky objektů',
    ],
    'entity_personality_visibilities'   => [
        'private'   => 'Ve výchozím nastavení se popis osobností nových postav nastaví jako soukromý.',
    ],
    'entity_visibilities'               => [
        'private'   => 'Nové objekty jsou soukromé',
    ],
    'errors'                            => [
        'access'        => 'K tomuto tažení nemáš přístup',
        'superboosted'  => 'Tato funkce je dostupná pouze pro super-zvýhodněná ("superboosted") tažení .',
        'unknown_id'    => 'Neznámé tažení',
    ],
    'export'                            => [
        'description'       => 'Exportovat tažení',
        'errors'            => [
            'limit' => 'Export lze provést pouze jednou denně. Zkus to, prosím, znovu zítra.',
        ],
        'helper'            => 'Exportuje tažení formou odkazu na soubor archivu ke stažení.',
        'helper_secondary'  => <<<'TEXT'
Vytvoří se dva soubory: Jeden soubor s objekty ve formátu JSON. A druhý soubor s uloženými obrázky.
Pozor, u větších tažení může pokus o export obrázků skončit chybou. V tom případě je třeba použít :api
TEXT
,
        'success'           => 'Export tvého tažení se připravuje. Jakmile bude soubor archivu ke stažení k dispozici, zašleme ti upozornění.',
        'title'             => 'Export tažení :name',
    ],
    'fields'                            => [
        'boosted'                       => 'Zvýhodnění ("boost") od',
        'connections'                   => 'Zobrazit tabulku souvislostí (namísto průzkumníku souvislostí zvýhodněných tažení)',
        'css'                           => 'CSS',
        'description'                   => 'Popis',
        'entity_count'                  => 'Počet objektů',
        'entity_note_visibility'        => 'Připnuté poznámky objektů',
        'entity_personality_visibility' => 'Viditelnost popisu osobnosti postavy',
        'entity_visibility'             => 'Viditelnost objektu',
        'entry'                         => 'Popis tažení',
        'excerpt'                       => 'Stručný popis tažení',
        'followers'                     => 'Sledující',
        'header_image'                  => 'Obrázek pozadí nástěnky tažení',
        'hide_history'                  => 'Skrýt historii objektu',
        'hide_members'                  => 'Skrýt členy tažení',
        'image'                         => 'Obrázek',
        'locale'                        => 'Jazyk',
        'name'                          => 'Název',
        'nested'                        => 'Je-li to možné, zobrazí seznamy objektů ve vnořené podobě.',
        'open'                          => 'Otevřené pro přihlášky',
        'public_campaign_filters'       => 'Filtr veřejných tažení',
        'related_visibility'            => 'Viditelnost příbuzných prvků',
        'rpg_system'                    => 'Systémy her na hrdiny',
        'superboosted'                  => '"Superboost" výhoda od',
        'system'                        => 'Systém',
        'theme'                         => 'Téma',
        'tooltip_family'                => 'Nezobrazovat jména rodin v informačních bublinách',
        'tooltip_image'                 => 'Zobrazovat obrázky objektů v informačních bublinách',
        'visibility'                    => 'Viditelnost',
    ],
    'following'                         => 'Sledující',
    'helpers'                           => [
        'boost_required'                => 'Tato funkce vyžaduje zvýhodněné tažení pomocí "Boost". Další informace najdeš na stránce :settings',
        'boosted'                       => 'Jsou dostupné některé bonusové funkce, protože tažení je zvýhodněné pomocí "Boost". Další informace najdeš na stránce :settings',
        'css'                           => 'Pro své tažení můžeš vytvořit vlastní CSS definici. Jakékoli zneužití této funkce povede k odstranění CSS definice. Opakované nebo závažné porušení mohou vést k odstranění tvého tažení.',
        'dashboard'                     => 'Vyplněním následujících polí ovlivníš vzhled nástěnky tažení.',
        'entity_note_visibility'        => 'Při vytváření nové poznámky objektu se u ní automaticky zaškrtne políčko "Připnutá".',
        'entity_personality_visibility' => 'Při vytváření nové postavy nebude pole "Viditelný popis osobnosti" automaticky zaškrtnuté.',
        'entity_visibility'             => 'Při vytváření nového objektu bude automaticky zaškrtnuté políčko "Soukromý"',
        'excerpt'                       => <<<'TEXT'
Obsah tohoto pole se zobrazí v záhlaví nástěnky. Můžeš sem tedy napsat pár vět o svém světu.
Necháš-li toto pole prázdné, použije se prvních až 1000 znaků popisu tažení.
TEXT
,
        'header_image'                  => 'Obrázek na pozadí záhlaví nástěnky',
        'hide_history'                  => 'Tato možnost skryje historii změn objektů před běžnými uživateli (bez administrátorských oprávnění).',
        'hide_members'                  => 'Tato možnost skryje seznam členů kampaně před běžnými uživateli (bez administrátorských oprávnění).',
        'locale'                        => 'Jazyk, používaný v textech tažení. Používá se pro vytváření obsahu a seskupení veřejných tažení.',
        'name'                          => 'Název tvého tažení a světa musí obsahovat alespoň 4 písmena či slova. Maximální délka není omezena.',
        'public_campaign_filters'       => 'Zadáš-li následující informace, usnadníš vyhledání tvé veřejné kampaně mezi ostatními.',
        'public_no_visibility'          => 'Pozor! Vaše tažení je veřejné, ale veřejná role kampaně nemá k ničemu přístup. :fix',
        'related_visibility'            => 'Výchozí nastavení viditelnosti při vytváření nového objektu s tímto polem (poznámky objektů, souvislosti, schopnosti, atd.)',
        'system'                        => 'Pokud je tvé tažení viditelné, systém se zobrazuje na stránce :link',
        'systems'                       => 'Protože nechceme uživatele zahltit příliš mnoha funkcemi, jsou některé prvky systému dostupné jen pro vybraná pravidla Her na hrdiny (např. tabulka vlastností nestvůr dle pravidel D&D apod.). Pokud přidáš podporované systémy, zobrazí se i související funkce.',
        'theme'                         => 'Vynutí téma tažení a přepíše předvolby uživatelů.',
        'view_public'                   => 'Chceš-li si prohlédnout své tažení, jak jej vidí uživatelé, coby veřejné tažení, otevři následující odkaz v soukromém / privátním zobrazení prohlížeče: :link',
        'visibility'                    => 'Zveřejnění tažení znamená, že kdokoli, kdo získá odkaz na toto tažení, si jej bude moci prohlédnout.',
    ],
    'index'                             => [
        'actions'   => [
            'new'   => [
                'title' => 'Nové tažení',
            ],
        ],
        'title'     => 'Tažení',
    ],
    'invites'                           => [
        'actions'               => [
            'add'   => 'E-mailová pozvánka',
            'copy'  => 'Kopírovat odkaz do schánky',
            'link'  => 'Nový odkaz',
        ],
        'create'                => [
            'buttons'       => [
                'create'    => 'Vytvořit pozvánku',
                'send'      => 'Zaslat pozvánku',
            ],
            'description'   => 'Pozvat přítele ke tvému tažení',
            'success'       => 'Pozvánka odeslána',
            'success_link'  => 'Vytvořen odkaz: :link',
            'title'         => 'Pozvat někoho ke tvému tažení',
        ],
        'destroy'               => [
            'success'   => 'Pozvánka odstraněna',
        ],
        'email'                 => [
            'link_text' => 'Připojit se k tažení uživatele :name',
            'subject'   => 'Uživatel :name ti posílá pozvánku, aby ses připojil k jeho tažení s názvem ":campaign", které vytváří v systému https://kanka.io . Chceš-li se k němu připojit, klepni na následující odkaz.',
            'title'     => 'Pozvánka od uživatele :name',
        ],
        'error'                 => [
            'already_member'    => 'Už jsi členem tohoto tažení.',
            'inactive_token'    => 'Tato pozvánka už byla využita nebo toto tažení již neexistuje.',
            'invalid_token'     => 'Tato pozvánka již není platná.',
            'login'             => 'Chceš-li se připojit k tažení, musíš se nejdříve přihlásit nebo zaregistrovat.',
        ],
        'fields'                => [
            'created'   => 'Odesláno',
            'email'     => 'E-mail',
            'role'      => 'Role',
            'type'      => 'Typ',
            'validity'  => 'Platnost',
        ],
        'helpers'               => [
            'email'     => 'Naše emailové zprávy často padají do spamu a někdy může jejich doručení trvat až několik hodin.',
            'validity'  => 'Počet uživatelů, kteří mohou tento odkaz použít před jeho zneplatněním. Pokud pole ponecháte prázdné, bude mít pozvánka neomezenou platnost.',
        ],
        'placeholders'          => [
            'email' => 'E-mailová adresa uživatele, kterého chceš pozvat',
        ],
        'types'                 => [
            'email' => 'E-mail',
            'link'  => 'Odkaz',
        ],
        'unlimited_validity'    => 'Neomezené použití',
    ],
    'leave'                             => [
        'confirm'   => 'Určitě chceš opustit toto tažení? Tím k němu natrvalo ztratíš přístup - pokud ti správce tažení nepošle znovu pozvánku.',
        'error'     => 'Nelze opustit tažení.',
        'success'   => 'Opustil jsi tažení.',
    ],
    'members'                           => [
        'actions'               => [
            'switch'        => 'Zobrazit jako',
            'switch-back'   => 'Zpět k mému zobrazení',
        ],
        'create'                => [
            'title' => 'Přidat člena kampaně',
        ],
        'description'           => 'Spravovat členy kampaně',
        'edit'                  => [
            'description'   => 'Upravit člena kampaně',
            'title'         => 'Upravit člena :name',
        ],
        'fields'                => [
            'joined'        => 'Připojil se',
            'last_login'    => 'Poslední přihlášení',
            'name'          => 'Uživatel',
            'role'          => 'Role',
            'roles'         => 'Role',
        ],
        'help'                  => 'Počet členů tažení není omezen',
        'helpers'               => [
            'admin' => 'Jako člen role správce tažení můžeš zvát nové uživatele, odstraňovat neaktivní uživatele a měnit jejich přístupová práva. Chceš-li prověřit přístupová práva uživatele, klepni na tlačítko :button. O této funkci nalezneš více informací zde: :link',
            'switch'=> 'Zobrazit tažení jako tento uživatel',
        ],
        'impersonating'         => [
            'message'   => 'Nyní kampaň vidíš jako zvolený uživatel. Některé funkce nemusí být nyní dostupné, ale jinak se vše zobrazuje přesně tak, jak by to viděl daný uživatel.',
            'title'     => 'Zobrazuje se z pohledu uživatele :name',
        ],
        'invite'                => [
            'description'   => 'Pokud chceš do svého tažení pozvat přátele, můžeš jim poslat pozvánku. Pokud pozvánku přijmou, stanou se členy s vybranou rolí. Pozvánku můžeš zaslat i e-mailem.',
            'more'          => 'Další role lze přidat zde: :link.',
            'roles_page'    => 'Seznam rolí',
            'title'         => 'Pozvánky',
        ],
        'manage_roles'          => 'Správa rolí uživatelů',
        'roles'                 => [
            'member'    => 'Člen',
            'owner'     => 'Správce',
            'player'    => 'Hráč',
            'public'    => 'Veřejný',
            'viewer'    => 'Pozorovatel',
        ],
        'switch_back_success'   => 'Zpět ke svému zobrazení',
        'title'                 => 'Členové tažení :name',
        'updates'               => [
            'added'     => 'Role :role přidána uživateli :user.',
            'removed'   => 'Role :role odebrána uživateli :user.',
        ],
        'your_role'             => 'Tvoje role: <i>:role</i>',
    ],
    'open_campaign'                     => [
        'helper'    => 'K veřejné kampani, označené jako otevřená, mohou uživatelé zasílat přihlášky k účasti. Seznam přihlášek najdeš na stránce :link.',
        'link'      => 'Přihlášky k tažení',
        'title'     => 'Otevřené tažení',
    ],
    'panels'                            => [
        'boosted'   => 'Zvýhodněné ("boosted") tažení.',
        'dashboard' => 'Nástěnka',
        'permission'=> 'Oprávnění',
        'setup'     => 'Nastavení',
        'sharing'   => 'Sdílení',
        'systems'   => 'Systémy',
        'ui'        => 'Rozhraní',
    ],
    'placeholders'                      => [
        'description'   => 'Stručné srhnutí tažení',
        'locale'        => 'Jazyk',
        'name'          => 'Název tažení',
        'system'        => 'Dračí Hlídka, Dračí Doupě, Shadowrun, D&D,',
    ],
    'roles'                             => [
        'actions'       => [
            'add'           => 'Přidat roli',
            'permissions'   => 'Spravovat oprávnění',
            'rename'        => 'Přejmenovat roli',
        ],
        'admin_role'    => 'Role správce',
        'create'        => [
            'success'   => 'Role vytvořena',
            'title'     => 'Vytvořena nová role :name',
        ],
        'description'   => 'Spravovat role tažení',
        'destroy'       => [
            'success'   => 'Role odstraněna',
        ],
        'edit'          => [
            'success'   => 'Role upravena',
            'title'     => 'Upravit roli :name',
        ],
        'fields'        => [
            'name'          => 'Název',
            'permissions'   => 'Oprávnění',
            'type'          => 'Typ',
            'users'         => 'Uživatelé',
        ],
        'helper'        => [
            '1' => 'Tažení může mít libovolný počet rolí. Role "Správce" automaticky získává přístup ke všem objektům tažení. Všechny ostatní role mohou definovat samostatná oprávnění k jednotlivých objektům tažení (postavy, místa, atd.)',
            '2' => 'Detailně nastavit přístupová oprávnění k objektům lze na kartě "Oprávnění" daného objektu. Tato karta se ukazuje u tažení s více rolemi nebo členy.',
            '3' => 'Řídit oprávnění lze buď na vylučovacím základu, kde se rolím přidělí přístup ke všem objektům a vybrané objekty se pak označí za "Soukromé". Nebo se pomocí rolí omezí přístupová práva k objektům a každý objekt lze pak zviditelnit samostatně.',
        ],
        'hints'         => [
            'campaign_not_public'   => 'Existuje veřejná role, ale tažení je označeno jako soukromé. Změnit toto nastavení lze úpravou nastavení tažení na kartě Sdílení',
            'public'                => 'Veřejná role se používá když si někdo prohlíží tvé veřejné tažení.',
            'role_permissions'      => 'Umožnit roli ":name" provádět následující akce na všech objektech.',
        ],
        'members'       => 'Členové',
        'modals'        => [
            'details'   => [
                'button'    => 'Potřebuji pomoc',
                'campaign'  => 'Oprávnění tažení umožňují následující',
                'entities'  => 'Krátké shrnutí možností tohoto oprávnění role',
                'more'      => 'Další informace najdeš v našem videonávodu na Youtube.',
                'title'     => 'Podrobnosti oprávnění',
            ],
        ],
        'permissions'   => [
            'actions'   => [
                'add'           => 'Vytvořit',
                'dashboard'     => 'Nástěnka',
                'delete'        => 'Odebrat',
                'edit'          => 'Upravit',
                'entity-note'   => 'Poznámka',
                'manage'        => 'Spravovat',
                'members'       => 'Členové',
                'permission'    => 'Oprávnění',
                'read'          => 'Zobrazit',
                'toggle'        => 'Změnit pro všechny',
            ],
            'helpers'   => [
                'add'           => 'Umožní vytváření objektů tohoto typu. Zároveň umožní zobrazení a úpravu vytvořených objektů, i když role jinak tato oprávnění neposkytuje.',
                'dashboard'     => 'Umožní úpravu nástěnek a součástí nástěnek.',
                'delete'        => 'Umožní smazání objektů tohoto typu',
                'edit'          => 'Umožní úpravu objektů tohoto typu',
                'entity_note'   => 'Umožní přidávat a upravovat poznámky objektu. A to i v situaci, kdy uživatel nemá oprávnění upravovat daný objekt.',
                'manage'        => 'Umožní upravovat nastavení tažení, stejně jako Správce tažení. Neumožní ale smazat tažení.',
                'members'       => 'Umožní zasílat pozvánky novým členům tažení.',
                'permission'    => 'Umožní nastavovat oprávnění k objektům, které může tato role sama upravovat',
                'read'          => 'Umožní zobrazení objektů tohoto typu, které nejsou označeny jako soukromé',
            ],
            'hint'      => 'Tato role umožní automaticky přístup ke všemu.',
        ],
        'placeholders'  => [
            'name'  => 'Název role',
        ],
        'show'          => [
            'description'   => 'Členové a oprávnění role tažení',
            'title'         => 'Role ":role"',
        ],
        'title'         => 'Role tažení :name',
        'types'         => [
            'owner'     => 'Správce',
            'public'    => 'Veřejné',
            'standard'  => 'Standard',
        ],
        'users'         => [
            'actions'   => [
                'add'       => 'Přidat člena',
                'remove'    => 'Odebrat uživateli :user roli :role',
            ],
            'create'    => [
                'success'   => 'Uživateli byla přidána tato role.',
                'title'     => 'Přidat uživateli roli :name',
            ],
            'destroy'   => [
                'success'   => 'Uživateli byla odebrána tato role.',
            ],
            'fields'    => [
                'name'  => 'Název',
            ],
        ],
    ],
    'settings'                          => [
        'actions'       => [
            'enable'    => 'Zapnout',
        ],
        'boosted'       => 'Tato funkce je součástí předběžného přístupu a je dostupná pouze zvýhodněným (:boosted) tažením.',
        'description'   => 'Zapnout nebo vypnout moduly tažení',
        'edit'          => [
            'success'   => 'Nastavení tažení aktualizováno',
        ],
        'helper'        => 'Všechny moduly tažení lze vypnout či zapnout. Vypnutí modulu pouze skryje související prvky rozhraní a přidružené objekty, aniž by se smazaly. Toto se projeví u všech členů tažení, včetně správců.',
        'helpers'       => [
            'abilities'     => 'Tvorba schopností, kouzel či dovedností, které lze přiřadit objektům.',
            'calendars'     => 'Tvorba kalendářů, které se používají ve tvém světu.',
            'characters'    => 'Obyvatelé tvého světu.',
            'conversations' => 'Smyšlené rozhovory mezi postavami nebo členy tažení. Tento modul se již nepoužívá.',
            'dice_rolls'    => 'Umožní hráčům her na hrdiny simulovat hody kostkou. Tento modul se již nepoužívá.',
            'events'        => 'Svátky, festivaly, pohromy, narozeniny, války...',
            'families'      => 'Rodiny a klany, jejich vztahy a členové.',
            'inventories'   => 'Správa inventáře objektů',
            'items'         => 'Zbraně, vozidla, předměty, lektvary...',
            'journals'      => 'Poznámky a postřehy, zapsané postavami nebo příprava vypravěče.',
            'locations'     => 'Planety, sféry, světadíly, řeky, státy, osady, chrámy, krčmy...',
            'maps'          => 'Mapy s možností přidávat vrstvy a ukazatele na další objekty tažení.',
            'menu_links'    => 'Vlastní odkazy v nabídce.',
            'notes'         => 'Pověsti, příběhy, magie, dějiny, umění...',
            'organisations' => 'Kulty, sekty, církve, frakce, cechy...',
            'quests'        => 'Záznam průběhu dobrodružství postav.',
            'races'         => 'Databáze ras a bytostí světu.',
            'tags'          => 'Každý objekt lze označit několika štítky. Štítky lze podřadit jiným štítkům a objekty lze pomocí štítků filtrovat.',
            'timelines'     => 'Zobraz dějiny světu pomocí časových os.',
        ],
        'title'         => 'Moduly tažení :name',
    ],
    'show'                              => [
        'actions'       => [
            'boost' => 'Zvýhodnit ("boost") tažení',
            'edit'  => 'Upravit tažení',
            'leave' => 'Opustit tažení',
        ],
        'description'   => 'Detailní zobrazení tažení',
        'menus'         => [
            'configuration'     => 'Konfigurace',
            'overview'          => 'Přehled',
            'user_management'   => 'Správa uživatelů',
        ],
        'tabs'          => [
            'achievements'      => 'Úspěchy',
            'applications'      => 'Přihlášky',
            'campaign'          => 'Tažení',
            'default-images'    => 'Výchozí obrázky',
            'export'            => 'Export',
            'information'       => 'Informace',
            'members'           => 'Členové',
            'menu'              => 'Nabídka',
            'plugins'           => 'Přídavné moduly',
            'recovery'          => 'Obnova',
            'roles'             => 'Role',
            'settings'          => 'Moduly',
        ],
        'title'         => 'Tažení :name',
    ],
    'superboosted'                      => [
        'gallery'   => [
            'error' => [
                'text'  => 'Nahrávat obrázky do textového editoru lze pouze u super-zvýhodněných ("superboosted") tažení.',
                'title' => 'Nahrát obrázek do galerie tažení',
            ],
        ],
    ],
    'ui'                                => [
        'helper'    => 'Změna těchto nastavení ovlivní, jak se budou některé objekty tažení zobrazovat.',
        'other'     => 'Ostatní',
    ],
    'visibilities'                      => [
        'private'   => 'Soukromé',
        'public'    => 'Veřejné',
        'review'    => 'Čeká se na schválení',
    ],
];
