<?php

	namespace Deliverist\Downloader;


	interface Downloader
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
