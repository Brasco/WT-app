#/usr/bin/bash

cd /home/bitnami/WT-app/app;
ionic compile;
mv ./build/android-release-unsigned.apk android-release-unsigned.apk
jarsigner -verbose -sigalg SHA1withRSA -digestalg SHA1 -keystore my-release-key.keystore -storepass aramaicoantico android-release-unsigned.apk WT_songbook;
rm WT_songbook.apk;
zipalign -v 4 android-release-unsigned.apk WT_songbook.apk;