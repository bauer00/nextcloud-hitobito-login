import { loadState } from '@nextcloud/initial-state'
import Vue from 'vue'

import AdminSettings from './components/AdminSettings.vue'

Vue.mixin({
	methods: {
		t,
		n,
		// OC,
		// OCA,
	},
})

const View = Vue.extend(AdminSettings)
new View({
	propsData: {
		initialState: loadState(appName, 'admin_settings_state'),
	},
}).$mount(`#${appName}-settings-admin`)
