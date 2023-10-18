import React from 'react';
import Typography from '@material-ui/core/Typography';
import Grid from '@material-ui/core/Grid';
import BootstrapInput from '../Misc/BootstrapInput'
import Checkbox from '../Misc/Checkbox';
import Select from '@material-ui/core/Select';
import MenuItem from '@material-ui/core/MenuItem';
const { sprintf, __ } = wp.i18n;
const Sendinblue = props => {
	let savedState = {
		api_key: props.settings.mailgun_private_key,
		domain_name: props.settings.mailgun_domain_name,
		region: props.settings.mailgun_region || 'us'
	}

	const [formValues, setFormValues] = React.useState(savedState);

	const form = [
		{
			id: 'api_key', label: __('API key', 'kaliforms'), name: 'kaliforms_mailgun_private_key', type: 'text',
			help: sprintf(
				__('The Private API key used for the connection to this service. You can retrieve this from your %sMailgun account%s.', 'kaliforms'),
				'<a target="_blank" href="https://app.mailgun.com/app/account/security/api_keys">',
				'</a>'),
		},
		{
			id: 'domain_name', label: __('Domain name', 'kaliforms'), name: 'kaliforms_mailgun_domain_name', type: 'text',
			help: sprintf(
				__('You can retrieve this from %shere%s.', 'kaliforms'),
				'<a target="_blank" href="https://app.mailgun.com/app/sending/domains">',
				'</a>'),
		},
		{
			id: 'region', label: __('Region', 'kaliforms'), name: 'kaliforms_mailgun_region', type: 'select', choices: [
				{ value: 'us', label: __('US', 'kaliforms') },
				{ value: 'eu', label: __('EU', 'kaliforms') },
			]
		},
	];

	const showItem = (el) => {
		let item = form.find(e => e.id === el);
		if (!item.hasOwnProperty('conditioned')) {
			return true;
		}

		return formValues[item.conditioned.conditioner] === item.conditioned.value
	}

	const inputChanged = (evt, id, type) => {
		let value = evt.target.value;
		if (type === 'checkbox') {
			value = evt.target.checked;
		}

		formValues[id] = value;
		setFormValues({ ...formValues });
	}

	const maybeProps = (item) => {
		let obj = {};
		if (item.type === 'checkbox') {
			obj.checked = formValues[item.id]
		}

		return obj;
	}

	return (
		<React.Fragment>
			<Typography variant={'h6'}>
				{__('Mailgun settings', 'kaliforms')}
			</Typography>
			<hr />
			<Grid container direction="row">
				<Grid item xs={9}>
					{form.map((e, idx) => {
						return (showItem(e.id) && <Grid key={e.name + idx} container direction="row" style={{ marginBottom: 8 }}>
							<Grid item xs={3}>
								<Typography variant="body1">
									<label htmlFor={e.id}>{e.label}</label>
								</Typography>
							</Grid>
							<Grid item xs={9}>
								<Choose>
									<When condition={e.type === 'checkbox'}>
										<Checkbox
											{...maybeProps(e)}
											name={e.name}
											type={e.type}
											value="on"
											id={e.id}
											onChange={evt => inputChanged(evt, e.id, e.type)} />
									</When>
									<When condition={e.type === 'select'}>
										<Select
											{...maybeProps(e)}
											name={e.name}
											value={formValues[e.id]}
											id={e.id}
											onChange={evt => inputChanged(evt, e.id, e.type)}
											input={<BootstrapInput />}
										>
											{e.choices.map(option => (<MenuItem value={option.value} key={option.value}>{option.label}</MenuItem>))}
										</Select>
									</When>
									<Otherwise>
										<BootstrapInput
											{...maybeProps(e)}
											id={e.id}
											name={e.name}
											type={e.type}
											value={formValues[e.id]}
											style={{ marginTop: e.type === 'checkbox' ? 5 : 0 }}
											onChange={evt => inputChanged(evt, e.id, e.type)}
											autoComplete={'off'}
										/>
									</Otherwise>
								</Choose>
								<If condition={e.hasOwnProperty('help') && e.help !== ''}>
									<Typography style={{ maxWidth: 400, marginBottom: 16, color: 'rgba(0, 0, 0, 0.54)' }} variant="body2">
										<span dangerouslySetInnerHTML={{ __html: e.help }}></span>
									</Typography>
								</If>
							</Grid>
						</Grid>)
					})}
				</Grid>
			</Grid>
		</React.Fragment>
	);
}
export default Sendinblue;
