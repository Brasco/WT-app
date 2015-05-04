/*
 * View controller for the searchable song list.
 *
 */
Songbook.controller("SongSearchController", function($scope, $ionicPlatform, $ionicModal, SongService) {
  $scope.songs = [];
  $scope.search = {
      name: ''
  };

  // load songs
  $ionicPlatform.ready(function(){
      SongService.getSongIndex()
          .then(function(songIndex) {
              $scope.songs = songIndex;
          }
      );
  });
});
