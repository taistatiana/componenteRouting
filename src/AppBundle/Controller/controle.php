<?php
	namespace AppBundle\Controller;


 	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 	use Symfony\Component\HttpFoundation\Response;
 	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
 	use Symfony\Component\HttpFoundation\Request;

 class controle extends Controller{

 	/**
 	 * @Route("/blog", name="index")
 	 */
 	public function indexAction()
 	{
 		return $this->render ('blog/index.html.php',array());	
 	}

 	/**
 	 * @Route("/blog/home", name="home_page")
 	 */
 	public function homeAction()
 	{
 		$request = Request::createFromGlobals ();
 		$nome = $request->request->get ('nome');
 		$senha = $request->request->get ('senha');

 		return $this->render ('blog/home.html.php',array('nome'=>$nome, 'senha'=>$senha));
 	}

 	/**
 	 * @Route("/blog/home/dados", name="dados_page")
 	 */
 	public function dadosAction()
 	{
 		$request = Request::createFromGlobals ();
 		$nome  = $request->request->get ('nome');
 		$senha = $request->request->get ('senha');

 		return $this->render ('blog/dados.html.php',array('nome'=>$nome, 'senha'=>$senha));
 	}
 	
}

?>