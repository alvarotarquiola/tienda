<?php /* Smarty version 2.6.20, created on 2010-11-12 12:08:58
         compiled from /home/qcpjuuzu/public_html/tienda/themes/isant-v2/footer.tpl */ ?>
	<?php if (! $this->_tpl_vars['content_only']): ?>
							</div>
						</div>
						<div id="centerColumnFooter"></div>
					</div>
					<?php if ($this->_tpl_vars['HOOK_RIGHT_COLUMN']): ?>
					<!-- Right -->
					<div id="right_column" class="column">
						<?php echo $this->_tpl_vars['HOOK_RIGHT_COLUMN']; ?>

					</div>
					<?php endif; ?>
				</div>
				<div id="lowerRound"></div>
			</div>

<!-- Footer -->
			<div id="footer"><?php echo $this->_tpl_vars['HOOK_FOOTER']; ?>
</div>
		</div>
	<?php endif; ?>
	</body>
</html>