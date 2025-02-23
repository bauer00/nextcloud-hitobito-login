<template>
	<NcAppContent>
		<NcSettingsSection name="General" description="General options regarding the login with hitobito"
			doc-url="https://github.com/bauer00/nextcloud-hitobito-login">
			<NcCheckboxRadioSwitch v-model="generalSettings" value="prune" name="generalSettings">
				Automatically remove
				groups from user
			</NcCheckboxRadioSwitch>
			<NcCheckboxRadioSwitch v-model="generalSettings" value="add" name="generalSettings">
				Automatically add groups
				to user
			</NcCheckboxRadioSwitch>
			<NcCheckboxRadioSwitch v-model="generalSettings" value="create" name="generalSettings">
				Create groups not yet
				existing
			</NcCheckboxRadioSwitch>
			<NcCheckboxRadioSwitch v-model="generalSettings" value="mappingBlock" name="generalSettings">
				Block users
				without a mapped group/role match
			</NcCheckboxRadioSwitch>
			<NcCheckboxRadioSwitch v-model="generalSettings" value="disablePassword" name="generalSettings">
				Disable
				password login for users using hitobito login
			</NcCheckboxRadioSwitch>
			activatedOptions: {{ generalSettings }}
		</NcSettingsSection>
		<NcSettingsSection name="Group mapping"
			description="In this section the mapping between group/role combination with an existing nextcloud group can be done"
			doc-url="https://github.com/bauer00/nextcloud-hitobito-login">
			<ul>
				<li v-for="(mapping, index) in mappings" :key="mapping.id" class="flex">
					<NcTextField v-model="mappings[index].group" label="Hitobito-Group" />
					<NcTextField v-model="mappings[index].role" label="Hitobito-Role" />
					<NcSettingsSelectGroup v-model="mappings[index].targets" placeholder="Groups to map to"
						label="The hidden label" />
					<NcButton aria-label="Remove mapping" type="secondary" @click="removeMapping(index)">
						<template v-if="style.indexOf('icon') !== -1" #icon>
							<Minus :size="20" />
						</template>
					</NcButton>
				</li>
			</ul>
			<NcButton aria-label="Add mapping" type="secondary" @click="addMapping()">
				<template v-if="style.indexOf('icon') !== -1" #icon>
					<Plus :size="20" />
				</template>
				<template v-if="style.indexOf('text') !== -1">
					Add new mapping
				</template>
			</NcButton>
			<!-- See federated server addition list in "Sharing" settings page -->
		</NcSettingsSection>
	</NcAppContent>
</template>

<script>
import NcAppContent from '@nextcloud/vue/dist/Components/NcAppContent.js'
import NcSettingsSection from '@nextcloud/vue/dist/Components/NcSettingsSection.js'
import NcCheckboxRadioSwitch from '@nextcloud/vue/dist/Components/NcCheckboxRadioSwitch.js'
import { NcSettingsSelectGroup } from '@nextcloud/vue/dist/Components/NcSettingsSelectGroup.js'
import NcTextField from '@nextcloud/vue/dist/Components/NcTextField.js'
import NcButton from '@nextcloud/vue/dist/Components/NcButton.js'
import Plus from 'vue-material-design-icons/Plus.vue'
import Minus from 'vue-material-design-icons/Minus.vue'

export default {
	name: 'Settings',
	components: {
		NcAppContent, NcSettingsSection, NcCheckboxRadioSwitch, NcSettingsSelectGroup, NcTextField, NcButton, Plus, Minus,
	},
	data() {
		return {
			generalSettings: [],
			groups: [],
			mappings: [],
			style: 'icontext',
		}
	},
	methods: {
		addMapping() {
			this.mappings.push({})
		},
		removeMapping(index) {
			this.mappings.splice(index, 1)
		},
	},
}
</script>

<style scoped lang="scss">
#hitobitologin {
	display: flex;
	justify-content: center;
	margin: 16px;
}

.flex {
	display: flex;
	gap: 5px;
	align-items: baseline;
}
</style>
