<nav class="navigation">
	
	<button aria-expanded="false" aria-controls="menu">
		<?=file_get_contents("gui/gui_burger.svg");?>
	</button>
	
	<ul id="menu" hidden>
		<li><a href="/" class="logo <? echo ($q=="home") ? 'active' : '' ?>">CoronavirusAPI</a></li>
		<li><a href="api" class="<? echo ($q=="api") ? 'active' : '' ?>">Use</a></li>
		<li><a href="faq" class="<? echo ($q=="faq") ? 'active' : '' ?>">FAQ</a></li>
		<li><a href="team" class="<? echo ($q=="team") ? 'active' : '' ?>">Team</a></li>
		<li><a href="media" class="<? echo ($q=="media") ? 'active' : '' ?>">Media</a></li>
		<li><a href="donate" class="<? echo ($q=="donate") ? 'active' : '' ?>">Donate</a></li>
		<li><a href="legal" class="<? echo ($q=="legal") ? 'active' : '' ?>">Legal Notices</a></li>
	</ul>
</nav>