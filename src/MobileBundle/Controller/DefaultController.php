<?php
namespace MobileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultController extends Controller
{
    /**
     * @Route("/register",name="mobile_register")
     * @Method({"POST"})
     * @param Request $request
     * @return Response
     */
    public function registerAction(Request $request)
{        
         $response=new JsonResponse();
         $response->headers->set('Access-Control-Allow-Origin','*');
         $userManager = $this->container->get('fos_user.user_manager');
         $user=$userManager->createUser();
         $user->setEnabled(true);
         $user->setUsername($request->get('username'));
         $user->setEmail($request->get('email'));
       
         $user->AddRole('USER');
         $password = $this->container->get('security.password_encoder')->encodePassword($user,$request->get('password'));
         $user->setPassword($password);
         try{
             $userManager->updateUser($user);
         }catch(\Exception $e){
              return new Response("username or email already used", 500,array('Access-Control-Allow-Origin'=>'*'));
         }
         $response->setData(array('status'=>'success','ApiKey'=>$user->getApiKey()));
    
    return $response;
    
}
    /**
     * @Route("/login",name="mobile_login")
     * @Method({"POST"})
     * @param Request $request
     * @return Response
     */
public function loginAction(Request $request){
    $response=new JsonResponse();
    $response->headers->set('Access-Control-Allow-Origin','*');
     try{
        $token = $this->get('security.authentication.manager')->authenticate(new UsernamePasswordToken($request->get('username'), $request->get('password'), 'main'));
        $this->get('security.context')->setToken($token);
    }
    catch(BadCredentialsException $e){
        return new Response("Bad credentials", 403,array('Access-Control-Allow-Origin'=>'*'));
    }
    $response->headers->set('X-Auth-Token',$this->getUser()->getApiKey());
    
    $response->setData(array('status'=>'success','ApiKey'=>$this->getUser()->getApiKey()));
    
    return $response;
}
    



}