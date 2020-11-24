

# DAW-M07-UF2UF3-MVC-inProgress

Aplicaci� per gestionar usuaris, projectes, equips, tasques...

1 ) En una primera versi� aprenem a connectar-nos a la BD
,a recuperar informaci�, afegir-ne de nova i a eleminar registres
Tot en una �nica p�gina.

2) En la segona versi� creem una classe anomenada Usuaris que contindr�
tot el codi d'acc�s a la BD, estructurada en m�todes per : afegir, esborrar, recuperar 1 registre, recuper-los tots,...
Tamb� separem el codi que cont� html en fitxers separats.
Aix� aconseguim estructurar una mica m�s l'aplicaci�. La classe Usuaris formar� part del model de l'aplicaci�.
Els fitxers llistat.php i formnew.php que contenen el codi en html ser� part de la vista.
Esperem poder separar la nostra aplicaci� en 3 capes: M-V-C Model vista Controlador.

3)Hem estructurat el codi del controlador index.php en diferents m todes. Hem posat un switch que crida cada un d'aquest m todes segons un par metre GET anomenat operaci .
Hem afegit la vista formupdate per a poder actualitzar la informaci  d'un usuari. Hem afegit 2 m todes al controlador, un per mostrar el formulari i l'altre per desar la informaci  enviada a trav s d'aquest formulari. 

4) Creem la taula de projectes. Creem el model Projectes. Com els constructor, get, getAll, delete s�n m�todes molt semblants creem la classe Model i implementem aquests m�todes all�. Usuaris i Projectes hereten de la classe Model (afegim atribut $taula per a que els m�todes es puguin reutilitzar correctament).
Creem les vistes per a la gesti� de la nova taula i tamb� el controlador projectes.php, que tindr� un codi molt semblant al controlador que ja ten�em, index.php. index.php per� passa a anomenar-se usuaris.php i col�loquem el codi font dins de la carpeta controladors).
El fitxer index.php de la carpeta principal passa a tenir �nicament dos enlla�os per a cridar a cada controlador respectivament.


5) Fem que index.php passi a ser el controlador principal de l'aplicaci�. Afegirem el par�metre control per especificar el controlador que volem carregar en cada moment. Les url de la nostra aplicaci� tindran la forma index.php?control=nomcontrol&accio=nomaccio&parametres=.....
Creem un controlador anomenat default per si no ens passen cap controlador en la url. El carregarem per defecte en aquest cas.

6) Els controladors passen a ser classes. En el constructor carreguem els models. Un m�tode index ser� el m�tode que es carragar� per defecte.
Hem de canviar el controlador index.php per a que carregui els nous tipus de controladors.
Afegim header i footers a les vistes.

