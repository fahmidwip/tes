//soal nomor 1 <br>

<?php


 class TokenService {
   private $generatedTokens = [];
   
   function generate(string $user) {
     $token = uniqid();
     $this->saveUserToken($user, $token);
     printf("Generate token for %s = %s \n", $user, $token);
     return $token;
   }
 
   function verify(string $user, string $token) {
     $userTokens = $this->generatedTokens[$user];
     if (isset($userTokens)) {
       $tokenFoundKey = array_search($token, $userTokens);
                                     
       if ($tokenFoundKey !== false) {
         unset($userTokens[$tokenFoundKey]);
         $this->generatedTokens[$user] = $userTokens;
         printf("Token %s has been verified for %s \n", $token, $user);
         return true;
       }
     }
 
     printf("No tokens found for user %s \n", $user);
     return false;
   }
 
   function getTokenOfUser(string $user) {
     return $this->generatedTokens[$user];
   }
 
   private function saveUserToken(string $user, string $token) {
     if (!isset($this->generatedTokens[$user])) {
       $this->generatedTokens[$user] = [];
     }
   
     array_unshift($this->generatedTokens[$user], $token);
 
     if (count($this->generatedTokens[$user]) > 10) {
       array_pop($this->generatedTokens[$user]);
     }
   }
 }
 
 $tokenService = new TokenService();
 $USER1 = "user1";
 $USER2 = "user2";
 $USER3 = "user3";
 
 // Generate 3 tokens for User 1
 $user1Token1 = $tokenService->generate($USER1);
 $user1Token2 = $tokenService->generate($USER1);
 $user1Token3 = $tokenService->generate($USER1);
 
 // Generate 2 tokens for User 2 and verify one of it
 $user2Token1 = $tokenService->generate($USER2);
 $user2Token2 = $tokenService->generate($USER2);
 $tokenService->verify($USER2, $user2Token1);
 
 // Generate 2 tokens for User 3
 $user3Token1 = $tokenService->generate($USER3);
 $user3Token2 = $tokenService->generate($USER3);
 
 // Test number of tokens for each user have
 assert(count($tokenService->getTokenOfUser($USER1)) == 3);
 assert(count($tokenService->getTokenOfUser($USER2)) == 1);
 assert(count($tokenService->getTokenOfUser($USER3)) == 2);
 
 // Generate another 11 tokens for User 1
 // Only the 10 newest tokens will be saved, oldest tokens will be removed
 $user1Token4 = $tokenService->generate($USER1);
 $user1Token5 = $tokenService->generate($USER1);
 $tokenService->generate($USER1);
 $tokenService->generate($USER1);
 $tokenService->generate($USER1);
 $tokenService->generate($USER1);
 $tokenService->generate($USER1);
 $tokenService->generate($USER1);
 $tokenService->generate($USER1);
 $tokenService->generate($USER1);
 $tokenService->generate($USER1);
 
 // Test number of tokens for user 1 cannot exceeds 10 tokens
 assert(count($tokenService->getTokenOfUser($USER1)) == 10);
 
 // Test the oldest token is removed and keep remaining the 10 newest tokens
 assert(in_array($user1Token1, $tokenService->getTokenOfUser($USER1)) == FALSE);
 assert(in_array($user1Token2, $tokenService->getTokenOfUser($USER1)) == FALSE);
 assert(in_array($user1Token3, $tokenService->getTokenOfUser($USER1)) == FALSE);
 assert(in_array($user1Token4, $tokenService->getTokenOfUser($USER1)) == FALSE);
 assert(in_array($user1Token5, $tokenService->getTokenOfUser($USER1)) == TRUE);
 
 // Verify all tokens for User 1 and User 2
 foreach ($tokenService->getTokenOfUser($USER1) as $token) {
   $tokenService->verify($USER1, $token);
 }
 
 foreach ($tokenService->getTokenOfUser($USER2) as $token) {
   $tokenService->verify($USER2, $token);
 }
 
 // Test User 1 and User 2 must not have any tokens
 assert(count($tokenService->getTokenOfUser($USER1)) == 0);
 assert(count($tokenService->getTokenOfUser($USER2)) == 0);
?>