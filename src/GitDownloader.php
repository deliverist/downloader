<?php

	namespace Deliverist\Downloader;

	use CzProject\PathHelper;
	use CzProject\Runner\Runner;
	use Nette\Utils\FileSystem;


	class GitDownloader implements Downloader
	{
		/** @var string */
		private $url;

		/** @var string */
		private $branch;

		/** @var string */
		private $gitExecutable = 'git';


		/**
		 * @param  string $url
		 * @param  string $branch
		 */
		public function __construct($url, $branch)
		{
			$this->url = $url;
			$this->branch = $branch;
		}


		/**
		 * @param  string $gitExecutable
		 * @return self
		 */
		public function setGitExecutable($gitExecutable)
		{
			$this->gitExecutable = $gitExecutable;
			return $this;
		}


		/**
		 * @return string
		 */
		public function getLabel()
		{
			return $this->url . ' (' . $this->branch . ')';
		}


		/**
		 * @param  string $directory
		 * @return void
		 * @throws GitDownloaderException
		 */
		public function download($directory)
		{
			$directory = PathHelper::absolutizePath($directory);
			@mkdir($directory, 0777, TRUE);

			$runner = new Runner($directory);
			$result = $runner->run([
				$this->gitExecutable,
				'clone',
				'--depth' => 50,
				'--branch' => $this->branch,
				$this->url,
				$directory,
			]);

			if (!$result->isOk()) {
				throw new GitDownloaderException("Cloning of '{$this->url}' failed.");
			}

			FileSystem::delete($directory . '/.git');
		}
	}


	class GitDownloaderException extends Exception
	{
	}
