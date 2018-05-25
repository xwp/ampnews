<?php
/**
 * AMP News static comments list and reply form template.
 *
 * @package AMPNews
 */

// @codingStandardsIgnoreStart
?>
<div id="comments" class="comments">

	<div class="comments__title">
		<h2 class="heading heading--widget">Comments</h2>
	</div>

	<ol class="comments__list">

		<li id="comment-4" class="comment even thread-even depth-1">
			<article id="div-comment-4" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<amp-img alt=''
								 src='https://1.gravatar.com/avatar/1f0b00b8853cf0311888bb3ed2a77ebc?s=45&#038;d=mm&#038;r=g'
								 srcset='https://1.gravatar.com/avatar/1f0b00b8853cf0311888bb3ed2a77ebc?s=90&#038;d=mm&#038;r=g 2x'
								 class='avatar avatar-32 photo' height='45' width='45'>
						</amp-img>
						<b class="fn">
							<a href='https://tommcfarlin.com' rel='external nofollow' class='url'>Tom McFarlin</a>
						</b>
						<span class="says">says:</span>
					</div>
					<div class="comment-metadata">
						<a href="https://ampnews.local/2013/01/03/comments/#comment-4">
							<time datetime="2012-09-03T10:18:04+00:00">
								September 3, 2012 at 10:18 am
							</time>
						</a>
						<span class="edit-link"><a class="comment-edit-link"
												   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=4">Edit</a></span>
					</div><!-- .comment-metadata -->
				</footer>
				<div class="comment-content">
					<h2>Headings</h2>
					<h1>Header one</h1>
					<h2>Header two</h2>
					<h3>Header three</h3>
					<h4>Header four</h4>
					<h5>Header five</h5>
					<h6>Header six</h6>
					<h2>Blockquotes</h2>
					<p>Single line blockquote:</p>
					<blockquote><p>Stay hungry. Stay foolish.</p></blockquote>
					<p>Multi line blockquote with a cite reference:</p>
					<blockquote><p>People think focus means saying yes to the thing you&#8217;ve got to focus on. But
							that&#8217;s not what it means at all. It means saying no to the hundred other good ideas
							that there are. You have to pick carefully. I&#8217;m actually as proud of the things we
							haven&#8217;t done as the things I have done. Innovation is saying no to 1,000 things.
							<cite>Steve Jobs &#8211; Apple Worldwide Developers&#8217; Conference, 1997</cite></p>
					</blockquote>
					<h2>Tables</h2>
					<table>
						<tbody>
						<tr>
							<th>Employee</th>
							<th class="views">Salary</th>
							<th></th>
						</tr>
						<tr class="odd">
							<td><a href="https://john.do/" rel="nofollow">John Saddington</a></td>
							<td>$1</td>
							<td>Because that&#8217;s all Steve Job&#8217; needed for a salary.</td>
						</tr>
						<tr class="even">
							<td><a href="https://tommcfarlin.com/" rel="nofollow">Tom McFarlin</a></td>
							<td>$100K</td>
							<td>For all the blogging he does.</td>
						</tr>
						<tr class="odd">
							<td><a href="https://jarederickson.com/" rel="nofollow">Jared Erickson</a></td>
							<td>$100M</td>
							<td>Pictures are worth a thousand words, right? So Tom x 1,000.</td>
						</tr>
						<tr class="even">
							<td><a href="https://chrisam.es/" rel="nofollow">Chris Ames</a></td>
							<td>$100B</td>
							<td>With hair like that?! Enough said&#8230;</td>
						</tr>
						</tbody>
					</table>
					<h2>Definition Lists</h2>
					<dl>
						<dt>Definition List Title</dt>
						<dd>Definition list division.</dd>
						<dt>Startup</dt>
						<dd>A startup company or startup is a company or temporary organization designed to search for a
							repeatable and scalable business model.
						</dd>
						<dt>#dowork</dt>
						<dd>Coined by Rob Dyrdek and his personal body guard Christopher &#8220;Big Black&#8221;
							Boykins, &#8220;Do Work&#8221; works as a self motivator, to motivating your friends.
						</dd>
						<dt>Do It Live</dt>
						<dd>I&#8217;ll let Bill O&#8217;Reilly will <a
									href="https://www.youtube.com/watch?v=O_HyZ5aW76c" title="We'll Do It Live"
									rel="nofollow">explain</a> this one.
						</dd>
					</dl>
					<h2>Unordered Lists (Nested)</h2>
					<ul>
						<li>List item one
							<ul>
								<li>List item one
									<ul>
										<li>List item one</li>
										<li>List item two</li>
										<li>List item three</li>
										<li>List item four</li>
									</ul>
								</li>
								<li>List item two</li>
								<li>List item three</li>
								<li>List item four</li>
							</ul>
						</li>
						<li>List item two</li>
						<li>List item three</li>
						<li>List item four</li>
					</ul>
					<h2>Ordered List (Nested)</h2>
					<ol>
						<li>List item one
							<ol>
								<li>List item one
									<ol>
										<li>List item one</li>
										<li>List item two</li>
										<li>List item three</li>
										<li>List item four</li>
									</ol>
								</li>
								<li>List item two</li>
								<li>List item three</li>
								<li>List item four</li>
							</ol>
						</li>
						<li>List item two</li>
						<li>List item three</li>
						<li>List item four</li>
					</ol>
					<h2>HTML Tags</h2>
					<p>These supported tags come from the WordPress.com code <a
								href="https://en.support.wordpress.com/code/" title="Code" rel="nofollow">FAQ</a>.</p>
					<p><strong>Address Tag</strong></p>
					<address>
						1 Infinite Loop<br/>
						Cupertino, CA 95014<br/>
						United States<br/>
					</address>
					<p><strong>Anchor Tag (aka. Link)</strong></p>
					<p>This is an example of a <a href="https://apple.com" title="Apple" rel="nofollow">link</a>.</p>
					<p><strong>Abbreviation Tag</strong></p>
					<p>The abbreviation <abbr title="Seriously">srsly</abbr> stands for &#8220;seriously&#8221;.</p>
					<p><strong>Acronym Tag</strong></p>
					<p>The acronym <acronym title="For The Win">ftw</acronym> stands for &#8220;for the win&#8221;.</p>
					<p><strong>Big Tag</strong></p>
					<p>These tests are a <big>big</big> deal, but this tag is no longer supported in HTML5.</p>
					<p><strong>Cite Tag</strong></p>
					<p>&#8220;Code is poetry.&#8221; &#8212;<cite>Automattic</cite></p>
					<p><strong>Code Tag</strong></p>
					<p>You will learn later on in these tests that <code>word-wrap: break-word;</code> will be your best
						friend.</p>
					<p><strong>Delete Tag</strong></p>
					<p>This tag will let you
						<del>strikeout text</del>
						, but this tag is no longer supported in HTML5 (use the <code>&lt;strike&gt;</code> instead).
					</p>
					<p><strong>Emphasize Tag</strong></p>
					<p>The emphasize tag should <em>italicize</em> text.</p>
					<p><strong>Insert Tag</strong></p>
					<p>This tag should denote
						<ins>inserted</ins>
						text.
					</p>
					<p><strong>Keyboard Tag</strong></p>
					<p>This scarsly known tag emulates <kbd>keyboard text</kbd>, which is usually styled like the <code>&lt;code&gt;</code>
						tag.</p>
					<p><strong>Preformatted Tag</strong></p>
					<p>This tag styles large blocks of code.</p>
					<pre>
.post-title {
	margin: 0 0 5px;
	font-weight: bold;
	font-size: 38px;
	line-height: 1.2;
}
</pre>
					<p><strong>Quote Tag</strong></p>
					<p><q>Developers, developers, developers&#8230;</q> &#8211;Steve Ballmer</p>
					<p><strong>Strong Tag</strong></p>
					<p>This tag shows <strong>bold</strong><strong> text.</p>
					<p></strong><strong>Subscript Tag</strong></p>
					<p>Getting our science styling on with H<sub>2</sub>O, which should push the &#8220;2&#8221; down.
					</p>
					<p><strong>Superscript Tag</strong></p>
					<p>Still sticking with science and Albert Einstein&#8217;s E = MC<sup>2</sup>, which should lift the
						&#8220;2&#8221; up.</p>
					<p><strong>Teletype Tag</strong></p>
					<p>This rarely used tag emulates <tt>teletype text</tt>, which is usually styled like the <code>&lt;code&gt;</code>
						tag.</p>
					<p><strong>Variable Tag</strong></p>
					<p>This allows you to denote <var>variables</var>.</p>
				</div>
				<div class="reply">
					<a rel='nofollow' class='comment-reply-link' href='#' aria-label='Reply to Tom McFarlin'>Reply</a>
				</div>
			</article>
		</li>

		<li id="comment-3" class="comment odd alt thread-odd thread-alt depth-1">
			<article id="div-comment-3" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<amp-img alt=''
							 src='https://2.gravatar.com/avatar/25df3939b2e33bd19783411afd5bc6e3?s=45&#038;d=mm&#038;r=g'
							 srcset='https://2.gravatar.com/avatar/25df3939b2e33bd19783411afd5bc6e3?s=90&#038;d=mm&#038;r=g 2x'
								 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b class="fn"><a
									href='https://chrisam.es' rel='external nofollow' class='url'>Chris Ames</a></b>
						<span class="says">says:</span></div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://ampnews.local/2013/01/03/comments/#comment-3">
							<time datetime="2013-01-04T10:15:32+00:00">
								January 4, 2013 at 10:15 am
							</time>
						</a>
						<span class="edit-link"><a class="comment-edit-link"
												   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=3">Edit</a></span>
					</div><!-- .comment-metadata -->

				</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>There are a few checklist items that should be in each comment.</p>
					<ul>
						<li>The commenter&#8217;s <strong>gravatar</strong>. Optional, but a best practice. Use
							get_comment_author_email.
						</li>
						<li>The commenter&#8217;s <strong>name</strong>. Use <a
									href="https://codex.wordpress.org/Function_Reference/comment_author"
									title="Comment Author" rel="nofollow">comment_author</a>.
						</li>
						<li>The commenter&#8217;s <strong>URL</strong>. Usually applied as a link to the commenter&#8217;s
							name. Use <a href="https://codex.wordpress.org/Function_Reference/comment_author_url"
										 title="Comment Author URL" rel="nofollow">comment_author_url</a></li>
						<li>The <strong>date / time</strong> the comment was made. Use <a
									href="https://codex.wordpress.org/Function_Reference/get_comment_date"
									title="Get Comment Date" rel="nofollow">get_comment_date</a>.
						</li>
						<li>A <strong>permalink</strong> to the comment. Usually applied as a link to the date / time of
							the comment. Use <a href="https://codex.wordpress.org/Function_Reference/get_comment_link"
												title="Get Comment Link" rel="nofollow">get_comment_link</a></li>
						<li>Indication of a <strong>comment left by the post author</strong>. Style the <code>.bypostauthor</code>
							class.
						</li>
						<li>The <strong>comment text</strong>. Use <a
									href="https://codex.wordpress.org/Function_Reference/comment_text"
									title="Comment Text" rel="nofollow">comment_text</a>.
						</li>
						<li>An <strong>edit</strong> comment link. Use <a
									href="https://codex.wordpress.org/Function_Reference/edit_comment_link"
									title="Edit Comment Link" rel="nofollow">edit_comment_link</a>.
						</li>
						<li>A comment <strong>reply</strong> link. Used for threaded comments. Use <a
									href="https://codex.wordpress.org/Function_Reference/comment_reply_link"
									title="Comment Reply Link" rel="nofollow">comment_reply_link</a>.
						</li>
					</ul>
				</div><!-- .comment-content -->

				<div class="reply">
					<a rel='nofollow' class='comment-reply-link' href='#' aria-label='Reply to Chris Ames'>Reply</a>
				</div>
			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-5" class="comment even thread-even depth-1">
			<article id="div-comment-5" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<amp-img alt=''
							 src='https://1.gravatar.com/avatar/724f95667e2fbe903ee1b4cffcae3b25?s=45&#038;d=mm&#038;r=g'
							 srcset='https://1.gravatar.com/avatar/724f95667e2fbe903ee1b4cffcae3b25?s=90&#038;d=mm&#038;r=g 2x'
								 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b class="fn">Anonymous User</b>
						<span class="says">says:</span></div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://ampnews.local/2013/01/03/comments/#comment-5">
							<time datetime="2013-03-11T23:45:54+00:00">
								March 11, 2013 at 11:45 pm
							</time>
						</a>
						<span class="edit-link"><a class="comment-edit-link"
												   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=5">Edit</a></span>
					</div><!-- .comment-metadata -->

				</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>This user it trying to be anonymous.</p>
					<ul>
						<li>They used a fake email, so there should be no <a href="https://gravatar.com/"
																			 title="Gravatar"
																			 rel="nofollow">Gravatar</a> associated with
							it.
						</li>
						<li>They did not speify a website, so there should be no link to it in the comment.</li>
					</ul>
				</div><!-- .comment-content -->

				<div class="reply">
					<a rel='nofollow' class='comment-reply-link'
					   href='#'
					   aria-label='Reply to Anonymous User'>Reply</a>
				</div>
			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-6" class="comment odd alt thread-odd thread-alt depth-1">
			<article id="div-comment-6" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<amp-img alt=''
							 src='https://1.gravatar.com/avatar/af7935f33b10cec23f77b8d9717641df?s=45&#038;d=mm&#038;r=g'
							 srcset='https://1.gravatar.com/avatar/af7935f33b10cec23f77b8d9717641df?s=90&#038;d=mm&#038;r=g 2x'
							 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b class="fn"><a
									href='https://everchangingmedia.com/' rel='external nofollow' class='url'>Jason
								bradley</a></b> <span class="says">says:</span></div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://ampnews.local/2013/01/03/comments/#comment-6">
							<time datetime="2013-03-12T13:17:35+00:00">
								March 12, 2013 at 1:17 pm
							</time>
						</a>
						<span class="edit-link"><a class="comment-edit-link"
												   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=6">Edit</a></span>
					</div><!-- .comment-metadata -->

				</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Comments? I love comments!</p>
				</div><!-- .comment-content -->

				<div class="reply">
					<a rel='nofollow' class='comment-reply-link'
					   href='#'
					   aria-label='Reply to Jason bradley'>Reply</a>
				</div>
			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-7" class="comment even thread-even depth-1">
			<article id="div-comment-7" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<amp-img alt=''
							 src='https://1.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60?s=45&#038;d=mm&#038;r=g'
							 srcset='https://1.gravatar.com/avatar/767fc9c115a1b989744c755db47feb60?s=90&#038;d=mm&#038;r=g 2x'
							 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b class="fn"><a
									href='https://ma.tt/' rel='external nofollow' class='url'>Matt Mullenweg</a></b>
						<span class="says">says:</span></div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://ampnews.local/2013/01/03/comments/#comment-7">
							<time datetime="2013-03-14T07:53:26+00:00">
								March 14, 2013 at 7:53 am
							</time>
						</a>
						<span class="edit-link"><a class="comment-edit-link"
												   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=7">Edit</a></span>
					</div><!-- .comment-metadata -->

				</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>These tests are amazing!</p>
				</div><!-- .comment-content -->

				<div class="reply">
					<a rel='nofollow' class='comment-reply-link'
					   href='#'
					   aria-label='Reply to Matt Mullenweg'>Reply</a>
				</div>
			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-8"
			class="comment byuser comment-author-manovotny bypostauthor odd alt thread-odd thread-alt depth-1">
			<article id="div-comment-8" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<amp-img alt=''
							 src='https://0.gravatar.com/avatar/60cb31e323d15f1c0fc1a59ac17ba484?s=45&#038;d=mm&#038;r=g'
							 srcset='https://0.gravatar.com/avatar/60cb31e323d15f1c0fc1a59ac17ba484?s=90&#038;d=mm&#038;r=g 2x'
							 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b class="fn">Michael Novotny</b>
						<span class="says">says:</span></div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://ampnews.local/2013/01/03/comments/#comment-8">
							<time datetime="2013-03-14T07:56:46+00:00">
								March 14, 2013 at 7:56 am
							</time>
						</a>
						<span class="edit-link"><a class="comment-edit-link"
												   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=8">Edit</a></span>
					</div><!-- .comment-metadata -->

				</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Author Comment.</p>
				</div><!-- .comment-content -->

				<div class="reply">
					<a rel='nofollow' class='comment-reply-link'
					   href='#'
					   aria-label='Reply to Michael Novotny'>Reply</a>
				</div>
			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-9" class="comment even thread-even depth-1 parent">
			<article id="div-comment-9" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<amp-img alt=''
							 src='https://2.gravatar.com/avatar/b2c1febfd11117eef66c351c1d4c10f1?s=45&#038;d=mm&#038;r=g'
							 srcset='https://2.gravatar.com/avatar/b2c1febfd11117eef66c351c1d4c10f1?s=90&#038;d=mm&#038;r=g 2x'
							 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b class="fn"><a
									href='https://jarederickson.com/' rel='external nofollow' class='url'>Jared
								Erickson</a></b> <span class="says">says:</span></div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://ampnews.local/2013/01/03/comments/#comment-9">
							<time datetime="2013-03-14T07:57:01+00:00">
								March 14, 2013 at 7:57 am
							</time>
						</a>
						<span class="edit-link"><a class="comment-edit-link"
												   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=9">Edit</a></span>
					</div><!-- .comment-metadata -->

				</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Comment Depth 01</p>
				</div><!-- .comment-content -->

				<div class="reply">
					<a rel='nofollow' class='comment-reply-link'
					   href='#'
					   aria-label='Reply to Jared Erickson'>Reply</a>
				</div>
			</article><!-- .comment-body -->
			<ol class="children">
				<li id="comment-10" class="comment odd alt depth-2 parent">
					<article id="div-comment-10" class="comment-body">
						<footer class="comment-meta">
							<div class="comment-author vcard">
								<amp-img alt=''
									 src='https://2.gravatar.com/avatar/25df3939b2e33bd19783411afd5bc6e3?s=45&#038;d=mm&#038;r=g'
									 srcset='https://2.gravatar.com/avatar/25df3939b2e33bd19783411afd5bc6e3?s=90&#038;d=mm&#038;r=g 2x'
									 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b class="fn"><a
											href='https://chrisam.es/' rel='external nofollow' class='url'>Chris Ames</a></b>
								<span class="says">says:</span></div><!-- .comment-author -->

							<div class="comment-metadata">
								<a href="https://ampnews.local/2013/01/03/comments/#comment-10">
									<time datetime="2013-03-14T08:01:21+00:00">
										March 14, 2013 at 8:01 am
									</time>
								</a>
								<span class="edit-link"><a class="comment-edit-link"
														   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=10">Edit</a></span>
							</div><!-- .comment-metadata -->

						</footer><!-- .comment-meta -->

						<div class="comment-content">
							<p>Comment Depth 02</p>
						</div><!-- .comment-content -->

						<div class="reply">
							<a rel='nofollow' class='comment-reply-link'
							   href='#'
							   aria-label='Reply to Chris Ames'>Reply</a>
						</div>
					</article><!-- .comment-body -->
					<ol class="children">
						<li id="comment-11" class="comment even depth-3 parent">
							<article id="div-comment-11" class="comment-body">
								<footer class="comment-meta">
									<div class="comment-author vcard">
										<amp-img alt=''
											 src='https://2.gravatar.com/avatar/2801f5145de98010dd72f1ac6d92938f?s=45&#038;d=mm&#038;r=g'
											 srcset='https://2.gravatar.com/avatar/2801f5145de98010dd72f1ac6d92938f?s=90&#038;d=mm&#038;r=g 2x'
											 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b class="fn"><a
													href='https://john.do/' rel='external nofollow' class='url'>John
												Saddington</a></b> <span class="says">says:</span></div>
									<!-- .comment-author -->

									<div class="comment-metadata">
										<a href="https://ampnews.local/2013/01/03/comments/#comment-11">
											<time datetime="2013-03-14T08:02:06+00:00">
												March 14, 2013 at 8:02 am
											</time>
										</a>
										<span class="edit-link"><a class="comment-edit-link"
																   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=11">Edit</a></span>
									</div><!-- .comment-metadata -->

								</footer><!-- .comment-meta -->

								<div class="comment-content">
									<p>Comment Depth 03</p>
								</div><!-- .comment-content -->

								<div class="reply">
									<a rel='nofollow' class='comment-reply-link'
									   href='#'
									   aria-label='Reply to John Saddington'>Reply</a>
								</div>
							</article><!-- .comment-body -->
							<ol class="children">
								<li id="comment-12" class="comment odd alt depth-4 parent">
									<article id="div-comment-12" class="comment-body">
										<footer class="comment-meta">
											<div class="comment-author vcard">
												<amp-img alt=''
													 src='https://1.gravatar.com/avatar/1f0b00b8853cf0311888bb3ed2a77ebc?s=45&#038;d=mm&#038;r=g'
													 srcset='https://1.gravatar.com/avatar/1f0b00b8853cf0311888bb3ed2a77ebc?s=90&#038;d=mm&#038;r=g 2x'
													 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b
														class="fn"><a href='https://tommcfarlin.com/'
																	  rel='external nofollow' class='url'>Tom
														McFarlin</a></b> <span class="says">says:</span></div>
											<!-- .comment-author -->

											<div class="comment-metadata">
												<a href="https://ampnews.local/2013/01/03/comments/#comment-12">
													<time datetime="2013-03-14T08:03:22+00:00">
														March 14, 2013 at 8:03 am
													</time>
												</a>
												<span class="edit-link"><a class="comment-edit-link"
																		   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=12">Edit</a></span>
											</div><!-- .comment-metadata -->

										</footer><!-- .comment-meta -->

										<div class="comment-content">
											<p>Comment Depth 04</p>
										</div><!-- .comment-content -->

										<div class="reply"><a rel='nofollow' class='comment-reply-link'
															  href='#'
															  aria-label='Reply to Tom McFarlin'>Reply</a></div>
									</article><!-- .comment-body -->
									<ol class="children">
										<li id="comment-13"
											class="comment byuser comment-author-manovotny bypostauthor even depth-5 parent">
											<article id="div-comment-13" class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<amp-img alt=''
															 src='https://0.gravatar.com/avatar/60cb31e323d15f1c0fc1a59ac17ba484?s=45&#038;d=mm&#038;r=g'
															 srcset='https://0.gravatar.com/avatar/60cb31e323d15f1c0fc1a59ac17ba484?s=90&#038;d=mm&#038;r=g 2x'
															 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b
																class="fn"><a href='https://manovotny.com/'
																			  rel='external nofollow' class='url'>Michael
																Novotny</a></b> <span class="says">says:</span></div>
													<!-- .comment-author -->

													<div class="comment-metadata">
														<a href="https://ampnews.local/2013/01/03/comments/#comment-13">
															<time datetime="2013-03-14T08:10:29+00:00">
																March 14, 2013 at 8:10 am
															</time>
														</a>
														<span class="edit-link"><a class="comment-edit-link"
																				   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=13">Edit</a></span>
													</div><!-- .comment-metadata -->

												</footer><!-- .comment-meta -->

												<div class="comment-content">
													<p>Comment Depth 05</p>
													<p>Also an author comment.</p>
												</div><!-- .comment-content -->

											</article><!-- .comment-body -->
										</li><!-- #comment-## -->
										<li id="comment-14" class="comment odd alt depth-5 parent">
											<article id="div-comment-14" class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<amp-img alt=''
															 src='https://1.gravatar.com/avatar/af7935f33b10cec23f77b8d9717641df?s=45&#038;d=mm&#038;r=g'
															 srcset='https://1.gravatar.com/avatar/af7935f33b10cec23f77b8d9717641df?s=90&#038;d=mm&#038;r=g 2x'
															 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b
																class="fn"><a href='https://everchangingmedia.com/'
																			  rel='external nofollow' class='url'>Jason
																Bradley</a></b> <span class="says">says:</span></div>
													<!-- .comment-author -->

													<div class="comment-metadata">
														<a href="https://ampnews.local/2013/01/03/comments/#comment-14">
															<time datetime="2013-03-14T08:12:16+00:00">
																March 14, 2013 at 8:12 am
															</time>
														</a>
														<span class="edit-link"><a class="comment-edit-link"
																				   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=14">Edit</a></span>
													</div><!-- .comment-metadata -->

												</footer><!-- .comment-meta -->

												<div class="comment-content">
													<p>Comment Depth 06</p>
												</div><!-- .comment-content -->

											</article><!-- .comment-body -->
										</li><!-- #comment-## -->
										<li id="comment-15" class="comment even depth-5 parent">
											<article id="div-comment-15" class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<amp-img alt=''
															 src='https://2.gravatar.com/avatar/b2c1febfd11117eef66c351c1d4c10f1?s=45&#038;d=mm&#038;r=g'
															 srcset='https://2.gravatar.com/avatar/b2c1febfd11117eef66c351c1d4c10f1?s=90&#038;d=mm&#038;r=g 2x'
															 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b
																class="fn"><a href='https://jarederickson.com/'
																			  rel='external nofollow' class='url'>Jared
																Erickson</a></b> <span class="says">says:</span></div>
													<!-- .comment-author -->

													<div class="comment-metadata">
														<a href="https://ampnews.local/2013/01/03/comments/#comment-15">
															<time datetime="2013-03-14T08:12:58+00:00">
																March 14, 2013 at 8:12 am
															</time>
														</a>
														<span class="edit-link"><a class="comment-edit-link"
																				   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=15">Edit</a></span>
													</div><!-- .comment-metadata -->

												</footer><!-- .comment-meta -->

												<div class="comment-content">
													<p>Comment Depth 07</p>
												</div><!-- .comment-content -->

											</article><!-- .comment-body -->
										</li><!-- #comment-## -->
										<li id="comment-16" class="comment odd alt depth-5 parent">
											<article id="div-comment-16" class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<amp-img alt=''
															 src='https://2.gravatar.com/avatar/25df3939b2e33bd19783411afd5bc6e3?s=45&#038;d=mm&#038;r=g'
															 srcset='https://2.gravatar.com/avatar/25df3939b2e33bd19783411afd5bc6e3?s=90&#038;d=mm&#038;r=g 2x'
															 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b
																class="fn"><a href='https://chrisam.es/'
																			  rel='external nofollow' class='url'>Chris
																Ames</a></b> <span class="says">says:</span></div>
													<!-- .comment-author -->

													<div class="comment-metadata">
														<a href="https://ampnews.local/2013/01/03/comments/#comment-16">
															<time datetime="2013-03-14T08:13:42+00:00">
																March 14, 2013 at 8:13 am
															</time>
														</a>
														<span class="edit-link"><a class="comment-edit-link"
																				   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=16">Edit</a></span>
													</div><!-- .comment-metadata -->

												</footer><!-- .comment-meta -->

												<div class="comment-content">
													<p>Comment Depth 08</p>
												</div><!-- .comment-content -->

											</article><!-- .comment-body -->
										</li><!-- #comment-## -->
										<li id="comment-17" class="comment even depth-5 parent">
											<article id="div-comment-17" class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<amp-img alt=''
															 src='https://2.gravatar.com/avatar/2801f5145de98010dd72f1ac6d92938f?s=45&#038;d=mm&#038;r=g'
															 srcset='https://2.gravatar.com/avatar/2801f5145de98010dd72f1ac6d92938f?s=90&#038;d=mm&#038;r=g 2x'
															 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b
																class="fn"><a href='https://john.do/'
																			  rel='external nofollow' class='url'>John
																Saddington</a></b> <span class="says">says:</span></div>
													<!-- .comment-author -->

													<div class="comment-metadata">
														<a href="https://ampnews.local/2013/01/03/comments/#comment-17">
															<time datetime="2013-03-14T08:14:13+00:00">
																March 14, 2013 at 8:14 am
															</time>
														</a>
														<span class="edit-link"><a class="comment-edit-link"
																				   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=17">Edit</a></span>
													</div><!-- .comment-metadata -->

												</footer><!-- .comment-meta -->

												<div class="comment-content">
													<p>Comment Depth 09</p>
												</div><!-- .comment-content -->

											</article><!-- .comment-body -->
										</li><!-- #comment-## -->
										<li id="comment-18"
											class="comment byuser comment-author-manovotny bypostauthor odd alt depth-5">
											<article id="div-comment-18" class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<amp-img alt=''
															 src='https://0.gravatar.com/avatar/60cb31e323d15f1c0fc1a59ac17ba484?s=45&#038;d=mm&#038;r=g'
															 srcset='https://0.gravatar.com/avatar/60cb31e323d15f1c0fc1a59ac17ba484?s=90&#038;d=mm&#038;r=g 2x'
															 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b
																class="fn"><a href='https://manovotny.com/'
																			  rel='external nofollow' class='url'>Michael
																Novotny</a></b> <span class="says">says:</span></div>
													<!-- .comment-author -->

													<div class="comment-metadata">
														<a href="https://ampnews.local/2013/01/03/comments/#comment-18">
															<time datetime="2013-03-14T08:14:47+00:00">
																March 14, 2013 at 8:14 am
															</time>
														</a>
														<span class="edit-link"><a class="comment-edit-link"
																				   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=18">Edit</a></span>
													</div><!-- .comment-metadata -->

												</footer><!-- .comment-meta -->

												<div class="comment-content">
													<p>Comment Depth 10</p>
													<p>Also an author comment.</p>
												</div><!-- .comment-content -->

											</article><!-- .comment-body -->
										</li><!-- #comment-## -->
									</ol><!-- .children -->
								</li><!-- #comment-## -->
							</ol><!-- .children -->
						</li><!-- #comment-## -->
					</ol><!-- .children -->
				</li><!-- #comment-## -->
			</ol><!-- .children -->
		</li><!-- #comment-## -->
		<li id="comment-20" class="comment odd alt thread-even depth-1">
			<article id="div-comment-20" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<amp-img alt=''
							 src='https://0.gravatar.com/avatar/3297d9d4f20a61022b97e098a7f937c4?s=45&#038;d=mm&#038;r=g'
							 srcset='https://0.gravatar.com/avatar/3297d9d4f20a61022b97e098a7f937c4?s=90&#038;d=mm&#038;r=g 2x'
							 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b class="fn"><a
									href='https://soworthloving.com/' rel='external nofollow' class='url'>Eryn
								Erickson</a></b> <span class="says">says:</span></div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://ampnews.local/2013/01/03/comments/#comment-20">
							<time datetime="2013-03-14T09:56:43+00:00">
								March 14, 2013 at 9:56 am
							</time>
						</a>
						<span class="edit-link"><a class="comment-edit-link"
												   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=20">Edit</a></span>
					</div><!-- .comment-metadata -->

				</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Image comment.</p>
					<p><amp-img src="http://wptest.io/demo/wp-content/uploads/sites/2/2013/03/soworthloving-wallpaper.jpg"
								width="1556"
								height="972"
								layout="responsive"
								alt="I Am Worth Loving Wallpaper"></amp-img></p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link'
									  href='#'
									  aria-label='Reply to Eryn Erickson'>Reply</a></div>
			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-21" class="comment even thread-odd thread-alt depth-1">
			<article id="div-comment-21" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<amp-img alt=''
							 src='https://1.gravatar.com/avatar/aeae8de50513c9ac65f336b58cc687c8?s=45&#038;d=mm&#038;r=g'
							 srcset='https://1.gravatar.com/avatar/aeae8de50513c9ac65f336b58cc687c8?s=90&#038;d=mm&#038;r=g 2x'
							 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b class="fn"><a
									href='https://wpdaily.co/' rel='external nofollow' class='url'>WP Daily</a></b> <span
								class="says">says:</span></div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://ampnews.local/2013/01/03/comments/#comment-21">
							<time datetime="2013-03-14T11:23:24+00:00">
								March 14, 2013 at 11:23 am
							</time>
						</a>
						<span class="edit-link"><a class="comment-edit-link"
												   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=21">Edit</a></span>
					</div><!-- .comment-metadata -->

				</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>We are totally going to blog about these tests!</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link'
									  href='#'
									  aria-label='Reply to WP Daily'>Reply</a></div>
			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-22" class="comment odd alt thread-even depth-1">
			<article id="div-comment-22" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<amp-img alt=''
							 src='https://1.gravatar.com/avatar/497f3b3bf679d723938022d569ceba2f?s=45&#038;d=mm&#038;r=g'
							 srcset='https://1.gravatar.com/avatar/497f3b3bf679d723938022d569ceba2f?s=90&#038;d=mm&#038;r=g 2x'
							 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b class="fn"><a
									href='https://8bit.io/' rel='external nofollow' class='url'>8BIT</a></b> <span
								class="says">says:</span></div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://ampnews.local/2013/01/03/comments/#comment-22">
							<time datetime="2013-03-14T11:27:54+00:00">
								March 14, 2013 at 11:27 am
							</time>
						</a>
						<span class="edit-link"><a class="comment-edit-link"
												   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=22">Edit</a></span>
					</div><!-- .comment-metadata -->

				</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>We use these tests all the time! Killer stuff!</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link'
									  href='#'
									  aria-label='Reply to 8BIT'>Reply</a></div>
			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
		<li id="comment-23"
			class="comment byuser comment-author-manovotny bypostauthor even thread-odd thread-alt depth-1">
			<article id="div-comment-23" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<amp-img alt=''
							 src='https://0.gravatar.com/avatar/60cb31e323d15f1c0fc1a59ac17ba484?s=45&#038;d=mm&#038;r=g'
							 srcset='https://0.gravatar.com/avatar/60cb31e323d15f1c0fc1a59ac17ba484?s=90&#038;d=mm&#038;r=g 2x'
							 class='avatar avatar-32 photo' height='45' width='45'></amp-img> <b class="fn"><a
									href='https://manovotny.com/' rel='external nofollow' class='url'>Michael Novotny</a></b>
						<span class="says">says:</span></div><!-- .comment-author -->

					<div class="comment-metadata">
						<a href="https://ampnews.local/2013/01/03/comments/#comment-23">
							<time datetime="2013-03-14T11:30:33+00:00">
								March 14, 2013 at 11:30 am
							</time>
						</a>
						<span class="edit-link"><a class="comment-edit-link"
												   href="https://ampnews.local/wp-admin/comment.php?action=editcomment&#038;c=23">Edit</a></span>
					</div><!-- .comment-metadata -->

				</footer><!-- .comment-meta -->

				<div class="comment-content">
					<p>Thanks for all the comments, everyone!</p>
				</div><!-- .comment-content -->

				<div class="reply"><a rel='nofollow' class='comment-reply-link'
									  href='#'
									  aria-label='Reply to Michael Novotny'>Reply</a></div>
			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
	</ol><!-- .comment-list -->

	<div class="comments__log-in-button">
		<a href="#" class="button">Please log in to comment</a>
	</div>

	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">
			Leave a Reply
			<small>
				<a rel="nofollow" id="cancel-comment-reply-link" href="#" class="screen-reader-text">Cancel reply</a>
			</small>
		</h3>
		<form action-xhr="#"
			  method="post"
			  target="_top"
			  id="commentform"
			  class="comment-form"
			  novalidate>
			<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required
				fields are marked <span class="required">*</span></p>
			<p class="comment-form-comment"><label for="comment">Comment</label>
				<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true"
						  required="required"></textarea></p>
			<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input
						id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required='true'
						required='required'/></p>
			<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label>
				<input id="email" name="email" type="email" value="" size="30" maxlength="100"
					   aria-describedby="email-notes" aria-required='true' required='required'/></p>
			<p class="comment-form-url"><label for="url">Website</label>
				<input id="url" name="url" type="url" value="" size="30" maxlength="200"/></p>
			<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"/>
				<input type='hidden' name='comment_post_ID' value='149' id='comment_post_ID'/>
				<input type='hidden' name='comment_parent' id='comment_parent' value='0'/>
			</p>
		</form>
	</div><!-- #respond -->

	<div id="respond-logged-in" class="comment-respond">
		<h3 id="reply-title-1" class="comment-reply-title">
			Leave a Reply
			<small>
				<a rel="nofollow" id="cancel-comment-reply-link-1" href="#" class="screen-reader-text">Cancel reply</a>
			</small>
		</h3>
		<form action-xhr="#"
			  method="post"
			  target="_top"
			  id="commentform-1"
			  class="comment-form"
			  novalidate>
			<p class="logged-in-as">
				<a href="https://ampnews.local/wp-admin/profile.php"
				   aria-label="Logged in as admin. Edit your profile.">Logged in as admin</a>.
				<a href="#">Log out?</a>
			</p>
			<p class="comment-form-comment">
				<label for="comment-1">Comment</label>
				<textarea id="comment-1" name="comment"
						  cols="45" rows="8"
						  maxlength="65525"
						  aria-required="true"
						  required="required"></textarea>
			</p>
			<p class="form-submit">
				<input name="submit" type="submit" id="submit-1" class="submit" value="Post Comment"/>
				<input type='hidden' name='comment_post_ID' value='149' id='comment_post_ID-1'/>
				<input type='hidden' name='comment_parent' id='comment_parent-1' value='0'/>
			</p>
			<input type="hidden"
				   id="_wp_unfiltered_html_comment_disabled-1"
				   name="_wp_unfiltered_html_comment_disabled" value="470d8ca972"/>
		</form>
	</div><!-- #respond -->

</div><!-- #comments -->
