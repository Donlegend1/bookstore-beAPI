@extends('layouts.app')

@section('content')
	<input type="hidden" id="get_no_posts_name" value="No more posts" />
	<div id="focus-overlay"></div>
	<input type="hidden" class="seen_stories_users_ids" value="">
	<input type="hidden" class="main_session" value="44b2c939d5bc4eeb7035">
	<div class="content-container welcome-container">
		<div class="ad-placement-header-footer">
		</div>

		<div id="contnet" class="effect-load">
			<div class="wrapper">
				<div class="login forgot_pass">
					<div class="login_left_combo_parent">
						<div class="login_left_combo">
							<a href="/" class="logo"><img src="/themes/sunshine/img/logo10ca.png?cache=285" alt="Logo">
							</a>
							<h1><b>Connect</b> With Friends</h1>
							<p>Share What's New And <b>Life Moments</b> With<b> Your</b> Friends</p>

							<a class="night_day_switch day" href="javascript:void(0);" id="night_mode_toggle" data-mode='night'>
								<svg class="sun" width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M11.9985 6.4473C11.6692 6.4473 11.4023 6.18622 11.4023 5.86424V4.58306C11.4023 4.26094 11.6693 4 11.9985 4C12.3278 4 12.5946 4.26107 12.5946 4.58306V5.86424C12.5946 6.18636 12.3278 6.4473 11.9985 6.4473Z"
										fill="currentColor" />
									<path
										d="M11.9985 19.9999C11.6692 19.9999 11.4023 19.7388 11.4023 19.417V18.1357C11.4023 17.8136 11.6693 17.5527 11.9985 17.5527C12.3278 17.5527 12.5946 17.8136 12.5946 18.1357V19.417C12.5946 19.7389 12.3278 19.9999 11.9985 19.9999Z"
										fill="currentColor" />
									<path
										d="M17.4622 9.566C17.2542 9.566 17.0521 9.45936 16.9424 9.26936C16.7805 8.98917 16.8816 8.63309 17.1685 8.47474L18.3093 7.84492C18.5959 7.68658 18.9598 7.78585 19.1216 8.06604C19.2835 8.34634 19.1822 8.70231 18.8954 8.86065L17.7549 9.49035C17.662 9.54172 17.5614 9.56601 17.4622 9.56601L17.4622 9.566Z"
										fill="currentColor" />
									<path
										d="M5.39748 16.2299C5.18964 16.2299 4.98723 16.1233 4.87771 15.9333C4.71615 15.6528 4.8173 15.2971 5.10392 15.1387L6.24476 14.509C6.53196 14.3506 6.89536 14.4497 7.05703 14.7301C7.21871 15.0107 7.11768 15.3664 6.83094 15.5248L5.69011 16.1545C5.59743 16.2059 5.49699 16.2299 5.39748 16.2299L5.39748 16.2299Z"
										fill="currentColor" />
									<path
										d="M6.5373 9.56614C6.43803 9.56614 6.33723 9.54207 6.24491 9.49083L5.10408 8.86101C4.81746 8.70266 4.71595 8.34703 4.87787 8.06639C5.03978 7.7862 5.40319 7.68682 5.69039 7.84528L6.83122 8.4751C7.11784 8.6331 7.2191 8.98908 7.05731 9.26948C6.94745 9.45927 6.74549 9.56612 6.5373 9.56612L6.5373 9.56614Z"
										fill="currentColor" />
									<path
										d="M18.6019 16.23C18.5026 16.23 18.4017 16.2059 18.3094 16.1547L17.1683 15.5246C16.8818 15.3666 16.7804 15.0109 16.9424 14.7302C17.1041 14.4499 17.4676 14.3505 17.7547 14.5091L18.8958 15.1386C19.1823 15.2971 19.2839 15.6527 19.1216 15.9332C19.0122 16.1235 18.8104 16.23 18.6019 16.23L18.6019 16.23Z"
										fill="currentColor" />
									<path
										d="M12.0001 8C9.79087 8 8 9.79092 8 11.9999C8 14.2091 9.79092 16 12.0001 16C14.2093 16 16 14.2091 16 11.9999C16 9.79082 14.2093 8 12.0001 8ZM14.8046 12.0341C14.7918 12.0357 14.779 12.0365 14.7665 12.0365C14.6205 12.0365 14.4934 11.928 14.4742 11.7791C14.315 10.5433 13.2989 9.5688 12.0576 9.46186C11.8954 9.448 11.775 9.30516 11.7892 9.14266C11.803 8.98045 11.9456 8.86054 12.1083 8.87401C13.624 9.00441 14.8653 10.194 15.0595 11.7033C15.0802 11.8655 14.9661 12.0134 14.8045 12.0341L14.8046 12.0341Z"
										fill="currentColor" />
								</svg>
								<svg class="moon" width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19.9988 12.7929C19.7929 14.8157 18.8262 16.6847 17.2944 18.0217C15.7627 19.3589 13.7801 20.0643 11.748 19.9954C9.71586 19.9264 7.78568 19.0882 6.34823 17.6503C4.91061 16.2123 4.07298 14.2819 4.00453 12.2498C3.93622 10.2177 4.64221 8.23563 5.97991 6.70424C7.31762 5.17302 9.18701 4.20693 11.2099 4.00162C11.3338 3.98788 11.4503 4.06281 11.4891 4.1812C11.528 4.29959 11.4784 4.42897 11.3705 4.49129C10.3319 5.11046 9.50713 6.03188 9.00645 7.13234C8.50577 8.23295 8.35301 9.46007 8.56859 10.6497C8.78428 11.8394 9.35801 12.9349 10.2132 13.7897C11.0683 14.6445 12.1641 15.2179 13.3539 15.4331C14.5437 15.6484 15.7709 15.4952 16.8714 14.9942C17.9718 14.4932 18.893 13.6681 19.5119 12.6294C19.5755 12.5247 19.7029 12.4779 19.8192 12.5162C19.9355 12.5546 20.0099 12.668 19.9989 12.79L19.9988 12.7929Z"
										fill="currentColor" />
								</svg>
							</a>
						</div>
					</div>

					<div class="col-md-6">
						<div class="login_innre">
							@if (session('status'))
								<div class="alert alert-success" role="alert">
									{{ session('status') }}
								</div>
							@endif

							<form id="forgot-form" class="recover_password_by_email" method="POST" action="{{ route('password.email') }}">
								@csrf
								<p class="title">Forgot Your Password?</p>

								<p class="desc">If you already have an account, you can <a class="dec main" href="/">Login Here!</a></p>

								<div class="alert alert-danger errors"></div>
								<div class="wow_form_fields">
									<label for="recoveremail">E-mail</label>
									<input id="recoveremail" name="email" type="email" placeholder="enter you email" autofocus
										class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
										autocomplete="email" autofocus />
								</div>
								<div class="login_signup_combo">
									<div class="login__">
										<button type="submit" class="btn btn-main btn-mat add_wow_loader">Recover</button>
									</div>
								</div>
							</form>

							<div class="footer">
								<div class="welcome-footer">
									<div>
										© 2024 BOONBAC &nbsp;•&nbsp;<a data-ajax="?link1=terms&type=terms" href="terms/terms.html">Terms of Use</a>
										&nbsp;•&nbsp;<a data-ajax="?link1=terms&type=privacy-policy" href="terms/privacy-policy.html">Privacy
											Policy</a>
										&nbsp;•&nbsp;<a data-ajax="?link1=contact-us" href="contact-us.html">Contact Us</a>
										&nbsp;•&nbsp;<a data-ajax="?link1=terms&type=about-us" href="terms/about-us.html">About</a>
										&nbsp;•&nbsp;<a href="blogs.html">Blog</a>
										&nbsp;•&nbsp;<a href="forum/index.html" data-ajax="?link1=forum">Forum</a>
									</div>
									<div>
										<span class="lang">
											<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="modal" data-target="#select-language"><svg
													fill="currentColor" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"
													class="feather feather-translate" style="margin-top: -3px;width: 15px;height: 15px;vertical-align: middle;">
													<path
														d="M12.87,15.07L10.33,12.56L10.36,12.53C12.1,10.59 13.34,8.36 14.07,6H17V4H10V2H8V4H1V6H12.17C11.5,7.92 10.44,9.75 9,11.35C8.07,10.32 7.3,9.19 6.69,8H4.69C5.42,9.63 6.42,11.17 7.67,12.56L2.58,17.58L4,19L9,14L12.11,17.11L12.87,15.07M18.5,10H16.5L12,22H14L15.12,19H19.87L21,22H23L18.5,10M15.88,17L17.5,12.67L19.12,17H15.88Z" />
												</svg>
												Language</a>
										</span>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<script>
				$(document).on('click', '#night_mode_toggle', function(event) {
					mode = $(this).attr('data-mode');
					if (mode == 'night') {
						$('head').append(
							'<link rel="stylesheet" href="https://boonbac.com/themes/sunshine/stylesheet/dark.css" id="night-mode-css">'
						);
						$('#night_mode_toggle').attr('data-mode', 'day');
						$(this).addClass('night');
						$(this).removeClass('day');
						replaceLogos('night');
					} else {
						replaceLogos('day');
						$('#night-mode-css').remove();
						$('#night_mode_toggle').attr('data-mode', 'night');
						$(this).removeClass('night');
						$(this).addClass('day');
					}
					$.post(Wo_Ajax_Requests_File() + '?mode=' + mode);
				});

				var working = false;
				var $this = $('#forgot-form');
				var $this_sms = $('#forgot-form-sms');
				var $state = $this.find('.errors');
				var $state_sms = $this_sms.find('.errors');
				$(function() {
					$('#recover_password_by_email').click(function() {
						$('.x_chooser').hide();
						$('.recover_password_by_email').show();
					});
					$('#recover_password_by_sms').click(function() {
						$('.x_chooser').hide();
						$('.recover_password_by_sms').show();
					});

					Wo_SetTimer();
					$this.ajaxForm({
						url: Wo_Ajax_Requests_File() + '?f=recover',
						beforeSend: function() {
							working = true;
							$this.find('button').attr("disabled", true);
							$this.find('.add_wow_loader').addClass('btn-loading');
						},
						success: function(data) {
							if (data.status == 200) {
								$state.removeClass('alert-danger');
								$state.addClass('alert-success');
								$state.html('Email đã được gửi thành công');
								$this.find('.add_wow_loader').removeClass('btn-loading');
							} else {
								$this.find('button').attr("disabled", false);
								$this.find('.add_wow_loader').removeClass('btn-loading');
								$state.html(data.errors);
							}
							working = false;
						}
					});

					$this_sms.ajaxForm({
						url: Wo_Ajax_Requests_File() + '?f=recoversms',
						beforeSend: function() {
							working = true;
							$this_sms.find('button').attr("disabled", true);
							$this_sms.find('.add_wow_loader').addClass('btn-loading');
						},
						success: function(data) {
							if (data.status == 200) {
								$state_sms.removeClass('alert-danger');
								$state_sms.addClass('alert-success');
								$state_sms.html('Khôi phục SMS đã được gửi thành công');
								$this_sms.find('.add_wow_loader').removeClass('btn-loading');
								setTimeout(function() {
									window.location.href = data.location;
								}, 1000);
							} else {
								$this_sms.find('button').attr("disabled", false);
								$this_sms.find('.add_wow_loader').removeClass('btn-loading');
								$state_sms.html(data.errors);
							}
							working = false;
						}
					});

				});
			</script>
		</div>
	@endsection
