<br/><br/>

<section class="Settings utility-flex-container">
  <nav id="main-nav" class="Box Box--Large Box--bright">
		<ul>
        <li class="{{ setActive('kids') }}">
					<a href="{{ route('kids') }}">Kids Ministry</a>

					<i class="material-icons">keyboard_arrow_right</i>
				</li>
        <li class="{{ setActive('youth') }}">
					<a href="{{ route('youth') }}">Youth Ministry</a>

					<i class="material-icons">keyboard_arrow_right</i>
				</li>
        <li class="{{ setActive('college') }}">
					<a href="{{ route('college') }}">College Ministry</a>

					<i class="material-icons">keyboard_arrow_right</i>
				</li>
        <li class="{{ setActive('sundayschool') }}">
					<a href="{{ route('sundayschool') }}">Adult Sunday School</a>

					<i class="material-icons">keyboard_arrow_right</i>
				</li>
        <li class="{{ setActive('fellowship') }}">
					<a href="{{ route('fellowship.index') }}">Home Fellowship Groups</a>

					<i class="material-icons">keyboard_arrow_right</i>
				</li>
	</ul>
  </nav>
</section>
