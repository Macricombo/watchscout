#!/bin/bash

# Imposta i permessi per le directory di storage
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# Imposta i permessi per i file di Laravel
chmod 644 .env

# Assicurati che l'utente www-data sia il proprietario delle directory che necessitano di scrittura
chown -R www-data:www-data storage
chown -R www-data:www-data bootstrap/cache

# Imposta i permessi per artisan
chmod +x artisan

echo "Permessi impostati correttamente!"
