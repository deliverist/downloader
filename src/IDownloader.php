<?php

	namespace Deliverist\Downloader;


	interface IDownloader
	{
		/**
		 * @param  string
		 * @return void
		 * @throws Exception
		 */
		function download($directory);
	}
