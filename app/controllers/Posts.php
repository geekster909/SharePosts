<?php
	/**
	 * 
	 */
	class Posts extends Controller
	{
		
		function __construct()
		{
			if(!isLoggedin()) {
				redirect('users/login');
			}

			$this->postModel = $this->model('Post');
		}

		public function index()
		{
			//Get posts
			$posts = $this->postModel->getPosts();

			$data = [
				'posts' => $posts,
			];

			$this->view('posts/index', $data);
		}
	}