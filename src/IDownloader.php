<?php

	namespace Deliverist\Downloader;


	interface IDownloader
	{
		/**
		 * @return string
		 */
		function getLabel();


		/**
		 * @param  string
		 * @return void
		 * @throws Exception
		 */
		function download($directory);
	}
