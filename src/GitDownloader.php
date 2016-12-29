<?php

	namespace Deliverist\Downloader;

	use CzProject\PathHelper;
	use CzProject\Runner\Runner;
	use Nette\Utils\FileSystem;


	class GitDownloader implements IDownloader
	{
		/** @var string */
		private $url;

		/** @var string */
		private $branch;

		/** @var string */
		private $gitExecutable = 'git';


		/**
		 * @param  string
		 * @param  string
		 */
		public function __construct($url, $branch)
		{
			$this->url = $url;
			$this->branch = $branch;
		}


		/**
		 * @param  string
		 * @return self
		 */
		public function setGitExecutable($gitExecutable)
		{
			$this->gitExecutable = $gitExecutable;
			return $this;
		}


		/**
		 * @param  string
		 * @return void
		 * @throws GitDownloaderException
		 */
		public function download($directory)
		{
			$directory = PathHelper::absolutizePath($directory);
			@mkdir($directory, 0777, TRUE);

			$runner = new Runner($directory);
			$result = $runner->run(array(
				$this->gitExecutable,
				'clone',
				'--branch' => $this->branch,
				$this->url,
				$directory,
			));

			if (!$result->isOk()) {
				throw new GitDownloaderException("Cloning of '{$this->url}' failed.");
			}

			FileSystem::delete($directory . '/.git');
		}
	}


	class GitDownloaderException extends Exception
	{
	}
