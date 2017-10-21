/**
 * Created by limx on 2017/10/21.
 */
import * as types from './mutation-types'
import api from '../common/api'

export const setVersion = ({commit}, version) => {
    commit(types.APP_SET_VERSION, {
        v: version
    })
}

export const setUserInfo = ({commit}, token, info) => {
    commit(types.USER_SET_INFO, {
        token: token,
        user: info,
    })
}