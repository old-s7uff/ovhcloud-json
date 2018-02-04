var OVHStorage = require('node-ovh-storage');

var config = {
    username: 'NSseFzehDBed',
    password: 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    authURL:  'https://auth.cloud.ovh.net/v2.0',
    tenantId: 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    region:   'GRA3'
};

var storage = new OVHStorage(config);
// init token
storage.getToken(function(err) {
  // create new container
  // storage.createContainer('dopecdn', function() {
    // put file
    storage.putFile('backup.sql', '/dopecdn/backup.sql', function(err, res) {
      // list files in container
      storage.getFiles('/dopecdn', function(err, files) {
        // done
      });
    });
  // });
});
