sqlite3 verycd.sqlite3.db .dump .exit > verycd.dump
sed -i 's/INSERT INTO "verycd"/INSERT INTO `ljr_verycd`/g;/COMMIT/d;/BEGIN TRANSACTION/d;/CREATE INDEX/d' verycd.dump

