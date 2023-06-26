mkdir -p ~/projekte/dwh
cd ~/projekte/dwh'
git clone git@pwrk-gitlab.pwrk.de:personalwerk-dps/projekte/job-publisher/jp-xi/xi-code.git
cd xi-code

# in den Branch zum Testen / Entwickeln wechseln
git checkout (develop|dein Entwicklungszweig)

# wir müssen uns noch am Gitlab anmelden für die weiteren Schritte:
docker login pwrk-gitlab.pwrk.de:5050

# wir müssen für den Composer nahher das Login peer Token vorbereiten
cp auth.json.dist auth.json
# dazu tragen wir in auth.json eine TOKEN ein der Lesezugriff auf die API gibt !!!

# optional wenn wir den Server nutzen wollen den Docker startet
# das ist optional, weil der Importer aktuell den Webserver ohnehin nicht unterstützt!
docker-compose build
docker-compose up -d

# Abhängigkeiten installieren
docker/bin/composer install
docker/bin/composer dump-autoload

# eine Crontab Datei Anlegen
touch /etc/cron.d/pwrk_worker
chown YOURID:YOURGROUP /etc/cron.d/pwrk_worker

# den CodeSniffer nutzen
## zum Prüfen
docker/bin/phpcs src

## zum autofixen
docker/bin/phpcbf src

# php UnitTest
docker/bin/test tests
