
function picController($scope) {
   $scope.picList = [];
   for (var i = 1, len = 16; i < len; i++) {
       $scope.picList.push(i);
   } 
}

