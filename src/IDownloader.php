<?php

	namespace Deliverist\Downloader;


	interface IDownloader
	{
		/**
		 * @return string
		 */
		function getLabel();


		/**
		 * @param  string $directory
		 * @return void
		 * @throws Exception
		 */
		function download($directory);
	}
