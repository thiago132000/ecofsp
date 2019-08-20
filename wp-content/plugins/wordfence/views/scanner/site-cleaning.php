<?php
if (!defined('WORDFENCE_VERSION')) { exit; }
/**
 * Displays the Site Cleaning prompt.
 */
?>
<script type="text/x-jquery-template" id="siteCleaningTmpl">
	<ul class="wf-issue-site-cleaning">
		<li class="wf-issue-summary">
			<ul>
				<li class="wf-issue-icon-colored"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 140.65 149.02"><defs><style>.a{fill:none;}.b{fill:#2d2d2d;}.c{fill:#525455;}.d{clip-path:url(#a);}.e{fill:#fcb316;}.f{fill:#fed10c;}</style><clipPath id="a" transform="translate(0)"><rect class="a" y="0.03" width="139.84" height="149.01"/></clipPath></defs><title>Site Cleaning</title><path class="b" d="M105.39,109.26l-1.28.72,1.13-.94Zm.43-1.68-1.25-.92,1.07,1.12Zm2.45-3-1.45,2.68.24.12Zm-.9,3.33,3.42-.53-3.45.27Zm-1.31.59c.35,2.61,3.43,4.65,2.38,7.42a7.71,7.71,0,0,1-1.58,2.14l-1.14-.88-1.1,1.43a9.68,9.68,0,1,0,3.12,2.46l1.13-1.46-1.36-1.05.3-.35a6.2,6.2,0,0,0,1.6-2.69c.7-2.71-2.21-4.58-2.54-7.07C106.8,108,106,108,106.07,108.52Z" transform="translate(0)"/><path class="c" d="M100.32,137.15a9.87,9.87,0,1,1,4.26-18.77l1.12-1.46,1.15.89.29-.33a5.2,5.2,0,0,0,1.13-1.61c.59-1.57-.21-2.89-1.07-4.29a8.12,8.12,0,0,1-1.33-3h0a.54.54,0,0,1,.49-.62.6.6,0,0,1,.7.52,7.45,7.45,0,0,0,1.29,2.83c.83,1.31,1.68,2.66,1.25,4.32a6.41,6.41,0,0,1-1.64,2.77l-.16.18,1.36,1L108,121.08a9.87,9.87,0,0,1-7,16Zm0-19.35-.68,0a9.48,9.48,0,1,0,8,3.38l-.1-.12,1.11-1.43-1.37-1.05.12-.15c.09-.12.2-.24.31-.36a6.06,6.06,0,0,0,1.55-2.61c.39-1.5-.38-2.72-1.2-4a7.71,7.71,0,0,1-1.34-3,.22.22,0,0,0-.26-.18.16.16,0,0,0-.15.19,7.87,7.87,0,0,0,1.28,2.89c.86,1.42,1.75,2.88,1.1,4.63a5.58,5.58,0,0,1-1.21,1.74l-.41.46-.12.14-1.13-.87-1.08,1.4-.14-.07A9.49,9.49,0,0,0,100.32,117.81Zm3.88-7.66-.22-.32,1.29-1.08.39.57Zm3-2-.06-.5-.6-.29,1.55-2.85.35.17-1.22,2.81,3.55-.28,0,.38Zm-1.56-.09-1.22-1.28.25-.29,1.42,1Z" transform="translate(0)"/><path class="b" d="M136.76,95.75,133,99.36a9.84,9.84,0,0,0-7.74-.79l-.29-1a1.83,1.83,0,1,0-3.52,1l.51,1.75-.11.1L119.4,97.9a1.83,1.83,0,0,0-2.65,2.53l2.74,2.87a9.83,9.83,0,0,0-1,2.72l-4.17-.1a1.83,1.83,0,0,0-.08,3.66l4.18.1a9.82,9.82,0,0,0,.89,2.74l-.3.28a1.83,1.83,0,0,0,2.52,2.65,9.86,9.86,0,0,0,5.46,2.51l1.24,4.31a1.83,1.83,0,1,0,3.52-1l-1-3.56a9.83,9.83,0,0,0,1.79-.67l1.18,1.24a1.83,1.83,0,1,0,2.65-2.53l-.87-.92a9.86,9.86,0,0,0,2.39-4.6l.91,0a1.83,1.83,0,1,0,.08-3.66l-.9,0a9.86,9.86,0,0,0-2.15-4.75l3.47-3.32a1.83,1.83,0,0,0-2.53-2.65Zm-4.29,10.59a4.6,4.6,0,0,1-4.07,6.29h-.32a4.58,4.58,0,0,1-2.7-1l-.23-.18a4.62,4.62,0,0,1-1.22-1.69,4.57,4.57,0,0,1-.35-1.48c0-.13,0-.27,0-.41s0-.21,0-.32a4.62,4.62,0,0,1,4.69-4.18l.4,0a4.65,4.65,0,0,1,3.78,2.89Z" transform="translate(0)"/><g class="d"><path class="e" d="M130.25,2.76,95.39,70.35l.6.18a26,26,0,0,1,4.14,1.73,21.92,21.92,0,0,1,4.23,2.89L139.29,7.42a5.09,5.09,0,0,0-9-4.66Zm0,0" transform="translate(0)"/><path class="e" d="M15.07,128.11A79,79,0,0,0,35.3,141.06,105.25,105.25,0,0,0,60.8,149h0a3.36,3.36,0,0,0,.47,0h.11c14-.46,24.91-5.12,32.43-13.86,9.89-11.49,13.46-28.77,12.77-43.62a18.16,18.16,0,0,0-4.69-11.69c-.22-.23-.45-.46-.69-.67a16.71,16.71,0,0,0-3.45-2.4,20.79,20.79,0,0,0-3.37-1.41A11.3,11.3,0,0,0,91,74.83c-4.91,0-9.61,3.08-13.21,6.23s-7.48,6.8-11.67,9.58c-4.6,3-9.64,4.58-14.89,6.07a127.82,127.82,0,0,1-20.77,4,169.19,169.19,0,0,1-18.84,1.11q-3.75,0-7.48-.2l-.43,0H3.45a3.46,3.46,0,0,0-3.27,4.58,52.56,52.56,0,0,0,14.88,22Zm-4.84-19.45h1.09a180.24,180.24,0,0,0,20.13-1.13c16.83-1.92,30.55-6,40.94-12.2a1.87,1.87,0,0,1,1-.26,1.9,1.9,0,0,1,.91.23c6,3.32,15.42,8.23,22.11,10.62a1.89,1.89,0,0,1,1.24,2c-.8,7-3.06,15.86-9,22.77-6.1,7.07-15.1,10.9-26.78,11.4H61.7a2.53,2.53,0,0,1-.45,0c-1.18-.21-4.08-.77-8-1.84,1.11-.49,2.26-1.08,3.42-1.73s2.09-1.23,3.12-1.9c3.21-2.07,6.32-4.42,8.73-6.35a.61.61,0,0,0-.63-1,83.68,83.68,0,0,1-18.08,4.68c-1.9.31-3.73.56-5.42.77-2,.25-3.77.44-5.26.58L38,134.7a81.9,81.9,0,0,1-9.4-5,37.24,37.24,0,0,0,3.94-.6c1.23-.25,2.47-.55,3.69-.88a96.5,96.5,0,0,0,9.35-3.12.41.41,0,0,0-.19-.79c-4.25.41-10.15.45-15.19.37-1.65,0-3.21-.06-4.58-.1-1.81-.05-3.31-.11-4.29-.15q-.87-.72-1.69-1.47-1.07-1-2.06-2c1-.1,2.09-.27,3.16-.47s2-.42,3-.68a93.34,93.34,0,0,0,10.52-3.42.41.41,0,0,0-.19-.79c-4,.38-9.44.44-14.26.39l-3.42-.06-3.31-.09A44.75,44.75,0,0,1,9.41,110a.93.93,0,0,1,.82-1.36Zm0,0" transform="translate(0)"/></g><path class="f" d="M9.24,108.65h1.1a184.19,184.19,0,0,0,20.42-1.14c17.07-1.93,31-6,41.52-12.28a1.91,1.91,0,0,1,1-.26,1.93,1.93,0,0,1,.92.24c6.12,3.34,15.64,8.29,22.42,10.69a1.9,1.9,0,0,1,1.26,2c-.81,7-3.11,16-9.15,22.91-6.18,7.11-15.32,11-27.15,11.47h-.11a2.59,2.59,0,0,1-.46,0c-1.19-.21-4.14-.77-8.08-1.85,1.13-.49,2.29-1.08,3.47-1.74s2.12-1.23,3.17-1.91c3.25-2.08,6.41-4.45,8.86-6.39a.62.62,0,0,0-.63-1.05C62.4,131.54,55.55,133,49.42,134c-1.93.31-3.78.57-5.49.78-2,.25-3.82.44-5.33.59l-1.19-.53a83.27,83.27,0,0,1-9.53-5.08,38,38,0,0,0,4-.6c1.24-.25,2.5-.56,3.74-.89a98.4,98.4,0,0,0,9.48-3.14.41.41,0,0,0-.19-.8c-4.31.41-10.3.45-15.41.38-1.67,0-3.25-.06-4.65-.1-1.84-.05-3.36-.11-4.36-.15q-.88-.73-1.72-1.48-1.08-1-2.09-2c1-.1,2.11-.27,3.21-.48s2.06-.43,3.09-.68a95.18,95.18,0,0,0,10.66-3.44.41.41,0,0,0-.19-.8c-4.05.39-9.57.44-14.46.39l-3.47-.06-3.36-.09A45,45,0,0,1,8.41,110a.94.94,0,0,1,.83-1.37Z" transform="translate(0)"/><path class="f" d="M61.44,143.29a3.56,3.56,0,0,1-.63-.06c-1.11-.19-4.13-.77-8.17-1.87l-2.73-.75,2.59-1.13c1-.46,2.18-1,3.38-1.7,1-.55,2-1.18,3.12-1.88,2.12-1.36,4.38-3,6.75-4.76A93.87,93.87,0,0,1,49.58,135c-1.79.29-3.65.55-5.53.78s-3.58.42-5.36.59l-.26,0-.24-.1-1.2-.53a84.56,84.56,0,0,1-9.65-5.14L24.83,129l3-.27a36.93,36.93,0,0,0,3.9-.59c1.15-.23,2.39-.53,3.67-.87,1.94-.52,3.83-1.12,5.51-1.7-3.13.13-6.94.17-11.39.11-1.68,0-3.26-.06-4.66-.1-1.84-.05-3.37-.11-4.37-.15h-.34l-.26-.22q-.89-.74-1.75-1.5c-.7-.63-1.42-1.31-2.13-2l-1.5-1.49,2.1-.21c1-.1,2-.25,3.12-.46s2-.41,3-.67c2.35-.59,4.66-1.31,6.69-2-2.9.13-6.39.17-10.44.12l-3.48-.06-3.37-.09h-.48l-.29-.38a46.1,46.1,0,0,1-3.84-6,1.91,1.91,0,0,1,0-1.9,1.93,1.93,0,0,1,1.67-.95h1.1a184.49,184.49,0,0,0,20.31-1.13c16.88-1.91,30.72-6,41.12-12.15a3,3,0,0,1,2.88,0c6.53,3.56,15.7,8.3,22.28,10.63A2.89,2.89,0,0,1,98.85,108c-.77,6.66-3,16.13-9.39,23.45s-15.75,11.3-27.87,11.82Zm-5.66-3.18c2.63.65,4.55,1,5.38,1.15l.28,0C73.06,140.8,82,137.06,88,130.16s8.17-16,8.91-22.37a.9.9,0,0,0-.6-1c-6.7-2.37-16-7.16-22.57-10.75a1,1,0,0,0-.91,0C62.14,102.4,48,106.57,30.88,108.51a186.66,186.66,0,0,1-20.53,1.14h-1a49.4,49.4,0,0,0,3.38,5.22l2.87.07L19,115c6.14.07,11-.06,14.35-.38a1.41,1.41,0,0,1,.64,2.72,95.67,95.67,0,0,1-10.78,3.48c-1.08.27-2.13.5-3.14.7l-1.21.21.57.52q.7.63,1.43,1.24l4,.14c1.39,0,3,.08,4.64.1a150.22,150.22,0,0,0,15.3-.37,1.41,1.41,0,0,1,.65,2.72,99.72,99.72,0,0,1-9.58,3.17c-1.33.36-2.6.66-3.8.9l-1.23.23c2.21,1.26,4.54,2.45,7,3.56l.94.42c1.68-.16,3.37-.35,5-.56,1.85-.23,3.69-.49,5.46-.77a82.57,82.57,0,0,0,18.11-4.64A1.62,1.62,0,0,1,69,131.14a109.57,109.57,0,0,1-8.94,6.45c-1.12.72-2.2,1.37-3.22,1.94ZM9.24,108.65v1h0Z" transform="translate(0)"/><path class="b" d="M126.45,127.44c-1.95-2.46-6.17-2.35-9.44.24s-4.34,6.67-2.39,9.13a5.18,5.18,0,0,0,4.58,1.75,2.47,2.47,0,0,0,3,1.09,1.33,1.33,0,0,0,1.83.18l3.22-2.55a1.33,1.33,0,0,0,.25-1.82,2.48,2.48,0,0,0-.38-3.16A5.18,5.18,0,0,0,126.45,127.44Zm-6.58,9.14a2.75,2.75,0,1,1,.45-3.86A2.75,2.75,0,0,1,119.87,136.57Zm4.68-.53c-.12.19-.5.17-.91,0,.08.45,0,.82-.2.89s-.63-.31-.83-.89-.15-1.06.08-1.19.68-.11,1.18.2S124.7,135.81,124.55,136Zm.48-3.56a2.75,2.75,0,1,1,.45-3.86A2.75,2.75,0,0,1,125,132.49Z" transform="translate(0)"/><path class="b" d="M132,138.94a1.34,1.34,0,0,0,.13.31l-4.54,1.21-.51.14-4.54,1.21a1.34,1.34,0,1,0-1.66,1.32,1.21,1.21,0,1,0,2.19.34v0l4.46-1.18.51-.14,4.46-1.18v0a1.21,1.21,0,1,0,1.73-1.38,1.34,1.34,0,1,0-2.22-.63Z" transform="translate(0)"/><path class="b" d="M124.54,144.87a1.34,1.34,0,0,1,.27.19l2.21-4.15.25-.47,2.21-4.15a1.34,1.34,0,1,1,1.66-1.31,1.21,1.21,0,1,1-.17,2.21h0l-2.17,4.07-.25.47-2.17,4.07h0a1.21,1.21,0,1,1-1.74,1.37,1.34,1.34,0,1,1-.1-2.3Z" transform="translate(0)"/></svg></li>
				<li class="wf-issue-short">
					<p><strong><?php _e('Need help with a hacked website?', 'wordfence'); ?></strong></p>
					<p><?php _e('Our team of security experts will clean the infection and remove malicious content. Once your site is restored we will provide a detailed report of our findings.', 'wordfence'); ?> <strong><?php _e('Includes a 1-year Wordfence Premium license.', 'wordfence'); ?></strong></p>
				</li>
				<li class="wf-issue-controls"><a class="wf-btn wf-btn-primary wf-btn-callout-subtle" href="https://www.wordfence.com/gnl1scanGetHelp/wordfence-site-cleanings/" target="_blank" rel="noopener noreferrer"><?php _e('Get Help', 'wordfence'); ?></a></li>
			</ul>
		</li>
	</ul>
</script>
